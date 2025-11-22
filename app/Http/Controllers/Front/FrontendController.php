<?php

namespace App\Http\Controllers\Front;

use App\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentsRequest;
use App\Http\Requests\CommunicationRequestsRequest;
use App\Http\Requests\EmploysVolunteersRequest;
use App\Http\Requests\ServicesGuaranteesRequest;
use App\Models\Comment;
use App\Models\CommunicationRequest;
use App\Models\Department;
use App\Models\EmployForm;
use App\Models\MonthlyReport;
use App\Models\PhotoAlbum;
use App\Models\Post;
use App\Models\ServiceForm;
use App\Models\Slider;
use App\Models\Video;
use App\Models\YearlyReports;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class FrontendController extends Controller
{
    use GeneralTrait;

    //////////////////////////////////////////////////////
    /// maintenance
    public function maintenance(){
        $title  = trans('frontend.maintenance');
        if(setting()->site_status == '1'){
            return redirect('/');
        }
        return view('frontend.maintenance',compact('title'));
    }
    //////////////////////////////////////////////////////
    /// index
    public function index()
    {
        /* ``````````````````````````````````````````````````````````````````````````````*/
        if (Lang() == 'ar') {
            $title = setting()->site_name_ar;
        } else {
            $title = setting()->site_name_en;
        }
        /* ``````````````````````````````````````````````````````````````````````````````*/

        /* ``````````````````````````````````````````````````````````````````````````````*/

        if (LaravelLocalization::getCurrentLocale() == 'ar') {
            /* ``````````````````````````````````````````````````````````````````````````````*/
            $sliders = Slider:: orderBy('order', 'asc')->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'ar')
                        ->orWhere('language', 'ar_en')
                        ->orWhere('language', 'without_language');
                })->get();
            /* ``````````````````````````````````````````````````````````````````````````````*/
            $latestPost = Post:: orderBy('id', 'desc')->where('post_status', 'enable')->where('department_id', '19')
                ->where(function ($q) {
                    $q->where('post_language', 'ar')
                        ->orWhere('post_language', 'ar_en');
                })->first();
            /* ``````````````````````````````````````````````````````````````````````````````*/
            $nextPosts = Post:: orderBy('id', 'desc')->where('post_status', 'enable')->where('department_id', '19')
                ->where(function ($q) {
                    $q->where('post_language', 'ar')
                        ->orWhere('post_language', 'ar_en');
                })->skip(1)->take(3)->get();

            /* ``````````````````````````````````````````````````````````````````````````````*/
            $projects = Post:: orderBy('id', 'desc')->where('post_status', 'enable')->where('department_id', '18')
                ->where(function ($q) {
                    $q->where('post_language', 'ar')
                        ->orWhere('post_language', 'ar_en');
                })->take(10)->get();

        } else {
            /* ``````````````````````````````````````````````````````````````````````````````*/
            $sliders = Slider:: orderBy('order', 'asc')->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'en')
                        ->orWhere('language', 'ar_en')
                        ->orWhere('language', 'without_language');
                })->get();
            /* ``````````````````````````````````````````````````````````````````````````````*/
            $latestPost = Post:: orderBy('id', 'desc')->where('post_status', 'enable')->where('department_id', '19')
                ->where(function ($q) {
                    $q->where('post_language', 'en')
                        ->orWhere('post_language', 'ar_en');
                })->first();
            /* ``````````````````````````````````````````````````````````````````````````````*/
            $nextPosts = Post:: orderBy('id', 'desc')->where('post_status', 'enable')->where('department_id', '19')
                ->where(function ($q) {
                    $q->where('post_language', 'en')
                        ->orWhere('post_language', 'ar_en');
                })->skip(1)->take(3)->get();
            /* ``````````````````````````````````````````````````````````````````````````````*/
            $projects = Post:: orderBy('id', 'desc')->where('post_status', 'enable')->where('department_id', '18')
                ->where(function ($q) {
                    $q->where('post_language', 'en')
                        ->orWhere('post_language', 'ar_en');
                })->take(10)->get();
        }

        return view('frontend.index', compact('title', 'sliders', 'latestPost', 'nextPosts', 'projects'));
    }

    //////////////////////////////////////////////////////////////////////
    /// page
    public function page($val = null)
    {
        if (!$val) {
            return redirect()->route('index');
        }
        $OriginalPageTitle = str_replace('-', ' ', $val);

        if (\Lang() == 'ar') {
            $department = Department::with('staticPage')
                ->where('dep_name_ar', '=', $OriginalPageTitle)->first();
            if(!$department){
                return redirect()->route('index');
            }
            $title = $department->dep_name_ar;

        } else {
            $department = Department::with('staticPage')
                ->where('dep_name_en', '=', $OriginalPageTitle)->first();
            if(!$department){
                return redirect()->route('index');
            }
            $title = $department->dep_name_en;
        }

        //return $department;
        return view('frontend.page', compact('department', 'title'));
    }

    //////////////////////////////////////////////////////////////////////
    /// categories
    public function categories($cat = null)
    {
        if (!$cat) {
            return redirect()->route('index');
        }
        $OriginalPageTitle = str_replace('-', ' ', $cat);

        if (\Lang() == 'ar') {
            $department = Department::with('staticPage')
                ->where('dep_name_ar', '=', $OriginalPageTitle)->first();
            if(!$department){
                return redirect()->route('index');
            }
            $title = $department->dep_name_ar;

        } else {
            $department = Department::with('staticPage')
                ->where('dep_name_en', '=', $OriginalPageTitle)->first();
            if(!$department){
                return redirect()->route('index');
            }
            $title = $department->dep_name_en;
        }


        $id = $department->id;
        if (LaravelLocalization::getCurrentLocale() == 'ar') {
            if ($id == '19') {
                $posts = Post::with('department')->with('admin')->where('post_status', 'enable')
                    ->where('department_id', $id)->orderByDesc('created_at')->where(function ($q) {
                        $q->where('post_language', 'ar')
                            ->orWhere('post_language', 'ar_en');
                    })->paginate(3);

                $lastPosts = Post::where('department_id', '19')->where('post_status', 'enable')
                    ->orderByDesc('created_at')->where(function ($q) {
                        $q->where('post_language', 'ar')
                            ->orWhere('post_language', 'ar_en');
                    })->paginate(3);
                return view('frontend.news', compact('department', 'posts', 'id', 'title',
                    'lastPosts'));

            } else {
                $posts = Post::with('department')->with('admin')->where('post_status', 'enable')
                    ->where('department_id', $id)->orderByDesc('created_at')->where(function ($q) {
                        $q->where('post_language', 'ar')
                            ->orWhere('post_language', 'ar_en');
                    })->paginate(6);

                return view('frontend.categories', compact('department', 'posts', 'id', 'title'));
            }
        } else {
            if ($id == '19') {
                $posts = Post::with('department')->with('admin')->where('post_status', 'enable')
                    ->where('department_id', $id)->orderByDesc('created_at')->where(function ($q) {
                        $q->where('post_language', 'en')
                            ->orWhere('post_language', 'ar_en');
                    })->paginate(3);

                $lastPosts = Post::where('department_id', '19')->where('post_status', 'enable')
                    ->orderByDesc('created_at')->where(function ($q) {
                        $q->where('post_language', 'en')
                            ->orWhere('post_language', 'ar_en');
                    })->paginate(3);
                return view('frontend.news', compact('department', 'posts', 'id', 'title',
                    'lastPosts'));

            } else {
                $posts = Post::with('department')->with('admin')->where('post_status', 'enable')
                    ->where('department_id', $id)->orderByDesc('created_at')->where(function ($q) {
                        $q->where('post_language', 'en')
                            ->orWhere('post_language', 'ar_en');
                    })->paginate(6);

                return view('frontend.categories', compact('department', 'posts', 'id', 'title'));
            }
        }


    }

    //////////////////////////////////////////////////////////////////////
    /// categories Paging
    public function categoriesPaging($id = null)
    {
        $department = Department::with('staticPage')->find($id);
        $id = $department->id;
        if ($id == '19') {
            $posts = Post::with('department')->with('admin')->where('post_status', 'enable')
                ->where('department_id', $id)->orderByDesc('created_at')->paginate(3);
            return view('frontend.news-paging', compact('department', 'posts', 'id'))->render();
        } else {
            $posts = Post::with('department')->with('admin')->where('post_status', 'enable')
                ->where('department_id', $id)->orderByDesc('created_at')->paginate(6);

            return view('frontend.categories-page', compact('department', 'posts', 'id'))->render();
        }
    }

    //////////////////////////////////////////////////////////////////////
    /// category
    public function new($val = null)
    {

        if (!$val) {
            return redirect()->route('index');
        }

        $originalTitle = str_replace('-', ' ', $val);

        if (\Lang() == 'ar') {
            $post = Post::with('department')->with('admin')
                ->where('post_title_ar', '=', $originalTitle)->first();
            if(!$post){
                return redirect()->route('index');
            }

        } else {
            $post = Post::with('department')->with('admin')
                ->where('post_title_en', '=', $originalTitle)->first();
            if(!$post){
                return redirect()->route('index');
            }
        }

        if (LaravelLocalization::getCurrentLocale() == 'ar') {
            $lastPosts = Post::where('department_id', '19')->where('post_status', 'enable')
                ->orderByDesc('created_at')->where(function ($q) {
                    $q->where('post_language', 'ar')
                        ->orWhere('post_language', 'ar_en');
                })->paginate(3);
        } else {
            $lastPosts = Post::where('department_id', '19')->where('post_status', 'enable')
                ->orderByDesc('created_at')->where(function ($q) {
                    $q->where('post_language', 'en')
                        ->orWhere('post_language', 'ar_en');
                })->paginate(3);
        }

        $comments = Comment::where('post_id', $post->id)->where('status', '1')->orderByDesc('created_at')->get();
        $title = $originalTitle;
        return view('frontend.new', compact('post', 'title', 'lastPosts', 'comments'));
    }

    //////////////////////////////////////////////////////////////////////
    /// category
    public function category($val = null)
    {
        if (!$val) {
            return redirect()->route('index');
        }
        $originalTitle = str_replace('-', ' ', $val);
        if (\Lang() == 'ar') {
            $post = Post::with('department')->with('admin')
                ->where('post_title_ar', '=', $originalTitle)->first();
            if(!$post){
                return redirect()->route('index');
            }

        } else {
            $post = Post::with('department')->with('admin')
                ->where('post_title_en', '=', $originalTitle)->first();
            if(!$post){
                return redirect()->route('index');
            }
        }
        $title = $originalTitle;
        return view('frontend.category', compact('post', 'title'));
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
            $videos = Video:: orderByDesc('id')->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'ar')
                        ->orWhere('language', 'ar_en');
                })->paginate('6');
        } else {
            $videos = Video:: orderByDesc('id')->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'en')
                        ->orWhere('language', 'ar_en');
                })->paginate('6');
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
            $videos = Video:: orderByDesc('id')->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'ar')
                        ->orWhere('language', 'ar_en');
                })->paginate('6');
        } else {
            $videos = Video:: orderByDesc('id')->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'en')
                        ->orWhere('language', 'ar_en');
                })->paginate('6');
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
            $photoAlbums = PhotoAlbum:: orderByDesc('id')->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'ar')
                        ->orWhere('language', 'ar_en');
                })->paginate('6');
        } else {
            $photoAlbums = PhotoAlbum:: orderByDesc('id')->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'en')
                        ->orWhere('language', 'ar_en');
                })->paginate('6');
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
            $photoAlbums = PhotoAlbum:: orderByDesc('id')->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'ar')
                        ->orWhere('language', 'ar_en');
                })->paginate('6');
        } else {
            $photoAlbums = PhotoAlbum:: orderByDesc('id')->where('status', 'enable')
                ->where(function ($q) {
                    $q->where('language', 'en')
                        ->orWhere('language', 'ar_en');
                })->paginate('6');
        }
        return view('frontend.photos-gallery-paging', compact('title', 'photoAlbums'))->render();
    }

    ///////////////////////////////////////////////////////
    /// photos Gallery Photos
    public function photosGalleryPhotos(Request $request)
    {
        if ($request->ajax()) {
            $data = File::where('relation_id', $request->id)
                ->orderByDesc('created_at')
                ->get();
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
        $monthlyReportsForOneYear = MonthlyReport::where('year', $year)->orderBy('month','asc')->get();
        return view('frontend.monthly-reports-details', compact('title', 'monthlyReportsForOneYear', 'year'));
    }

}
