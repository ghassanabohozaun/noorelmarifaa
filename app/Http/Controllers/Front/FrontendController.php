<?php

namespace App\Http\Controllers\Front;

use App\File;
use App\Http\Controllers\Controller;

use App\Http\Requests\Dashboard\CommentsRequest;
use App\Http\Requests\Dashboard\CommunicationRequestsRequest;
use App\Http\Requests\Dashboard\EmploysVolunteersRequest;
use App\Http\Requests\Dashboard\ServicesGuaranteesRequest;
use App\Models\Comment;
use App\Models\CommunicationRequest;
use App\Models\Department;
use App\Models\EmployForm;
use App\Models\MonthlyReport;
use App\Models\Page;
use App\Models\PhotoAlbum;
use App\Models\Post;
use App\Models\ServiceForm;
use App\Models\Slider;
use App\Models\Video;
use App\Models\YearlyReports;
use App\Services\Website\PageService;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class FrontendController extends Controller
{
    use GeneralTrait;

    protected $pageService;
    // construct
    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    // maintenance
    public function maintenance()
    {
        $title = trans('frontend.maintenance');
        if (setting()->site_status == '1') {
            return redirect('/');
        }
        return view('frontend.maintenance', compact('title'));
    }

    // index
    public function index()
    {
        if (Lang() == 'ar') {
            $title = setting()->site_name_ar;
        } else {
            $title = setting()->site_name_en;
        }

        return view('frontend.index', compact('title'));
    }

    // page
    public function page($slug = null)
    {
        if (!$slug) {
            return redirect()->route('index');
        }

        $page = Page::active()->where('slug->en', $slug)->orWhere('slug->ar', $slug)->first();

        if (!$page) {
            return redirect()->route('index');
        }

        return view('frontend.page', compact('page'));
    }

    // posts
    public function posts($departmentSlug)
    {
        if (!$departmentSlug) {
            return redirect()->route('index');
        }

        $department = Department::active()->where('slug->en', $departmentSlug)->orWhere('slug->ar', $departmentSlug)->first();
        $title = $department->name;
        $department_id = $department->id;

        if (Lang() == 'ar') {
            $posts = Post::where('post_status', 'enable')
                ->orderByDesc('post_added_date')
                ->where('department_id', $department_id)
                ->where(function ($q) {
                    $q->where('post_language', 'ar')->orWhere('post_language', 'ar_en');
                })
                ->paginate(3);

            $lastPosts = Post::where('post_status', 'enable')
                ->orderByDesc('post_added_date')
                ->where('department_id', 1)
                ->where(function ($q) {
                    $q->where('post_language', 'ar')->orWhere('post_language', 'ar_en');
                })
                ->paginate(3);
        } else {
            $posts = Post::where('post_status', 'enable')
                ->orderByDesc('post_added_date')
                ->where('department_id', $department_id)
                ->where(function ($q) {
                    $q->where('post_language', 'en')->orWhere('post_language', 'ar_en');
                })
                ->paginate(3);

            $lastPosts = Post::where('post_status', 'enable')
                ->orderByDesc('post_added_date')
                ->where('department_id', 1)
                ->where(function ($q) {
                    $q->where('post_language', 'en')->orWhere('post_language', 'ar_en');
                })
                ->paginate(3);
        }

        if ($department_id == 1) {
            return view('frontend.news', compact('department', 'posts', 'title', 'lastPosts', 'department_id'));
        } else {
            return view('frontend.categories', compact('department', 'posts', 'department_id', 'title'));
        }
    }

    // posts Paging
    public function postsPaging($id = null)
    {
        $posts = Post::where('post_status', 'enable')->orderByDesc('post_added_date')->where('department_id', $id)->paginate(3);

        if ($id == 1) {
            return view('frontend.news-paging', compact('posts', 'id'))->render();
        } else {
            return view('frontend.categories-page', compact('posts', 'id'))->render();
        }
    }

    // post
    public function post($val = null)
    {
        if (!$val) {
            return redirect()->route('index');
        }

        $originalTitle = str_replace('-', ' ', $val);

        if (Lang() == 'ar') {
            $post = Post::where('post_title_ar', '=', $originalTitle)->first();
            if (!$post) {
                return redirect()->route('index');
            }
        } else {
            $post = Post::where('post_title_en', '=', $originalTitle)->first();
            if (!$post) {
                return redirect()->route('index');
            }
        }

        if (Lang() == 'ar') {
            $lastPosts = Post::where('post_status', 'enable')
                ->orderByDesc('post_added_date')
                ->where('department_id', 1)
                ->where(function ($q) {
                    $q->where('post_language', 'ar')->orWhere('post_language', 'ar_en');
                })
                ->paginate(3);
        } else {
            $lastPosts = Post::where('post_status', 'enable')
                ->orderByDesc('post_added_date')
                ->where('department_id', 1)
                ->where(function ($q) {
                    $q->where('post_language', 'en')->orWhere('post_language', 'ar_en');
                })
                ->paginate(3);
        }

        $comments = Comment::where('post_id', $post->id)->where('status', '1')->orderByDesc('created_at')->get();
        $title = $originalTitle;
        if ($post->department_id == 1) {
            return view('frontend.new', compact('post', 'title', 'lastPosts', 'comments'));
        } else {
            return view('frontend.category', compact('post', 'title', 'lastPosts', 'comments'));
        }
    }

    //////////////////////////////////////////////////////////////////////
    /// add comment
    public function addComment(CommentsRequest $request)
    {
        if (setting()->comments_mailList_status == '0') {
            return $this->returnError(trans('frontend.comment_disable'), '500');
        } else {
            Comment::create([
                'person_ip' => $request->person_ip,
                'person_name' => $request->person_name,
                'person_email' => $request->person_email,
                'commentary' => $request->commentary,
                'status' => $request->status,
                'post_id' => $request->post_id,
            ]);

            return $this->returnSuccessMessage(trans('general.add_success_message'));
        }
    }

    //////////////////////////////////////////////////////////////////////
    /// contact us
    public function contactUs()
    {
        $title = trans('frontend.contact_us');
        return view('frontend.contact-us', compact('title'));
    }
    //////////////////////////////////////////////////////////////////////
    /// add Communication Request
    public function addCommunicationRequest(CommunicationRequestsRequest $request)
    {
        if (setting()->comments_mailList_status == '0') {
            return $this->returnError(trans('frontend.comment_disable'), '500');
        } else {
            CommunicationRequest::create([
                'communication_sender' => $request->communication_sender,
                'communication_email' => $request->communication_email,
                'communication_title' => $request->communication_title,
                'communication_details' => $request->communication_details,
                'communication_status' => $request->communication_status,
            ]);
            return $this->returnSuccessMessage(trans('general.add_success_message'));
        }
    }

    //////////////////////////////////////////////////////////////////////
    /// orders
    public function orders()
    {
        $title = trans('frontend.employ_and_volunteer_orders');
        return view('frontend.orders', compact('title'));
    }

    //////////////////////////////////////////////////////////////////////
    /// add order
    public function addOrder(EmploysVolunteersRequest $request)
    {
        try {
            if (setting()->forms_status == '0') {
                return $this->returnError(trans('frontend.forms_disable'), '500');
            } else {
                EmployForm::create([
                    'full_name' => $request->full_name,
                    'identification' => $request->identification,
                    'birthday' => $request->birthday,
                    'mobile_number' => $request->mobile_number,
                    'gender' => $request->gender,
                    'order_type' => $request->order_type,
                    'qualification' => $request->qualification,
                    'specialization' => $request->specialization,
                    'address' => $request->address,
                    'notes' => $request->notes,
                ]);
                return $this->returnSuccessMessage(trans('general.add_success_message'));
            }
        } catch (\Exception $exception) {
            return $this->returnSuccessMessage(trans('general.update_success_message'));
        }
    }

    //////////////////////////////////////////////////////////////////////
    /// services
    public function services()
    {
        $title = trans('frontend.aid_and_guarantees_services');
        return view('frontend.services', compact('title'));
    }
    /////////////////////////////////////////////////////////////////////
    ///  add Service
    public function addService(ServicesGuaranteesRequest $request)
    {
        try {
            if (setting()->forms_status == '0') {
                return $this->returnError(trans('forms.forms_disable'), '500');
            } else {
                ServiceForm::create([
                    'full_name' => $request->full_name,
                    'identification' => $request->identification,
                    'mobile_number' => $request->mobile_number,
                    'gender' => $request->gender,
                    'service_type' => $request->service_type,
                    'address' => $request->address,
                    'notes' => $request->notes,
                ]);
                return $this->returnSuccessMessage(trans('general.add_success_message'));
            }
        } catch (\Exception $exception) {
            return $this->returnSuccessMessage(trans('general.update_success_message'));
        }
    }

    /////////////////////////////////////////////////////////////////////
    ///  videos
    public function videos()
    {
        $title = trans('frontend.videos_gallery');
        if (LaravelLocalization::getCurrentLocale() == 'ar') {
            /* ``````````````````````````````````````````````````````````````````````````````*/
            $videos = Video::orderByDesc('id')
                ->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'ar')->orWhere('language', 'ar_en');
                })
                ->paginate('6');
        } else {
            $videos = Video::orderByDesc('id')
                ->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'en')->orWhere('language', 'ar_en');
                })
                ->paginate('6');
        }
        return view('frontend.videos', compact('title', 'videos'));
    }

    /////////////////////////////////////////////////////////////////////
    ///  videos paging
    public function videoPaging()
    {
        $title = trans('frontend.videos_gallery');

        if (LaravelLocalization::getCurrentLocale() == 'ar') {
            /* ``````````````````````````````````````````````````````````````````````````````*/
            $videos = Video::orderByDesc('id')
                ->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'ar')->orWhere('language', 'ar_en');
                })
                ->paginate('6');
        } else {
            $videos = Video::orderByDesc('id')
                ->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'en')->orWhere('language', 'ar_en');
                })
                ->paginate('6');
        }
        return view('frontend.videos-paging', compact('title', 'videos'))->render();
    }

    /////////////////////////////////////////////////////////////////////
    ///  photos gallery
    public function photosGallery()
    {
        $title = trans('frontend.photos_gallery');
        if (LaravelLocalization::getCurrentLocale() == 'ar') {
            /* ``````````````````````````````````````````````````````````````````````````````*/
            $photoAlbums = PhotoAlbum::orderByDesc('id')
                ->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'ar')->orWhere('language', 'ar_en');
                })
                ->paginate('6');
        } else {
            $photoAlbums = PhotoAlbum::orderByDesc('id')
                ->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'en')->orWhere('language', 'ar_en');
                })
                ->paginate('6');
        }
        return view('frontend.photos-gallery', compact('title', 'photoAlbums'));
    }

    /////////////////////////////////////////////////////////////////////
    ///  photos gallery
    public function photosGalleryPaging()
    {
        $title = trans('frontend.photos_gallery');
        if (LaravelLocalization::getCurrentLocale() == 'ar') {
            /* ``````````````````````````````````````````````````````````````````````````````*/
            $photoAlbums = PhotoAlbum::orderByDesc('id')
                ->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'ar')->orWhere('language', 'ar_en');
                })
                ->paginate('6');
        } else {
            $photoAlbums = PhotoAlbum::orderByDesc('id')
                ->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'en')->orWhere('language', 'ar_en');
                })
                ->paginate('6');
        }
        return view('frontend.photos-gallery-paging', compact('title', 'photoAlbums'))->render();
    }

    ///////////////////////////////////////////////////////
    /// photos Gallery Photos
    public function photosGalleryPhotos(Request $request)
    {
        if ($request->ajax()) {
            $data = File::where('relation_id', $request->id)->orderByDesc('created_at')->get();
            return response()->json($data);
        }
    }

    ///////////////////////////////////////////////////////
    /// yearly Reports
    public function yearlyReports()
    {
        $title = trans('frontend.yearly_report');

        $yearlyReports = YearlyReports::OrderBy('year', 'desc')->select('year')->distinct()->get();
        return view('frontend.yearly-reports', compact('title', 'yearlyReports'));
    }
    ///////////////////////////////////////////////////////
    /// get Yearly Reports For One Year
    public function getYearlyReportsForOneYear($year = null)
    {
        $title = trans('frontend.yearly_report');
        if (!$year) {
            return redirect()->route('yearly.reports');
        }
        $YearlyReportsForOneYear = YearlyReports::where('year', $year)->get();
        return view('frontend.yearly-reports-details', compact('title', 'YearlyReportsForOneYear', 'year'));
    }
    ///////////////////////////////////////////////////////
    /// monthly Reports
    public function monthlyReports()
    {
        $title = trans('frontend.monthly_report');

        $MonthlyReports = MonthlyReport::OrderBy('year', 'desc')->select('year')->distinct()->get();
        return view('frontend.monthly-reports', compact('title', 'MonthlyReports'));
    }

    ///////////////////////////////////////////////////////
    /// get monthly Reports For One Year
    public function getMonthlyReportsForOneYear($year = null)
    {
        $title = trans('frontend.monthly_report');
        if (!$year) {
            return redirect()->route('monthly.reports');
        }
        $monthlyReportsForOneYear = MonthlyReport::where('year', $year)->orderBy('month', 'asc')->get();
        return view('frontend.monthly-reports-details', compact('title', 'monthlyReportsForOneYear', 'year'));
    }
}
