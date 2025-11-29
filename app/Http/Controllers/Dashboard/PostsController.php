<?php

namespace App\Http\Controllers\Dashboard;

use App\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostsRequest;
 use App\Models\Post;
use App\Services\Dashboard\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{


    protected $postService;
    // __construct
    public function __construct(PostService $postService)
    {
        $this->postService  =  $postService;
    }

    ////////////////////////////////////////////////////////////////////////
    /// index function
    public function index()
    {
        $title = trans('posts.posts');
        $posts = $this->postService->getAll();

        return view('dashboard.posts.index', compact('title' ,'posts'));
    }


    ////////////////////////////////////////////////////////////////////////
    /// get Posts function
    public function getPosts(Request $request)
    {

    }
    ////////////////////////////////////////////////////////////////////////
    /// create function
    public function create()
    {
        $post = Post::create([
            'post_title_ar' => '',
            'post_title_en' => '',
            'department_id' => null,
            'admin_id' => auth()->guard('admin')->user()->id,
        ]);
        if (!empty($post)) {
            return redirect()->route('admin.post.edit', $post->id);
        }
    }
    ////////////////////////////////////////////////////////////////////////
    /// edit function
    public function edit($id = null)
    {
        $title = trans('posts.create_update_post');
        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('admin.not.found');
        }
        return view('dashboard.posts.post', compact('post', 'title'));

    }

    ////////////////////////////////////////////////////////////////////////
    /// store function
    public function store(PostsRequest $request)
    {


        try {
            $post = Post::find($request->id);

            if (!$post) {
                return redirect()->route('admin.not.found');
            }

            if ($request->post_language == 'ar') {
                $post->update([
                    'post_title_ar' => $request->post_title_ar,
                    'post_title_en' => null,
                    'post_summary_ar' => $request->post_summary_ar,
                    'post_summary_en' => null,
                    'post_details_ar' => $request->post_details_ar,
                    'post_details_en' => null,
                    'post_language' => $request->post_language,
                    'post_status' => $request->post_status,
                    'post_added_date' => $request->post_added_date,
                    'department_id' => $request->department_id,
                    'admin_id' => Auth::guard('admin')->user()->id,
                ]);

            } elseif ($request->post_language == 'en') {
                $post->update([
                    'post_title_ar' => null,
                    'post_title_en' => $request->post_title_en,
                    'post_summary_ar' => null,
                    'post_summary_en' => $request->post_summary_en,
                    'post_details_ar' => null,
                    'post_details_en' => $request->post_details_en,
                    'post_language' => $request->post_language,
                    'post_status' => $request->post_status,
                    'post_added_date' => $request->post_added_date,
                    'department_id' => $request->department_id,
                    'admin_id' => Auth::guard('admin')->user()->id,
                ]);

            } elseif ($request->post_language == 'ar_en') {
                $post->update([
                    'post_title_ar' => $request->post_title_ar,
                    'post_title_en' => $request->post_title_en,
                    'post_summary_ar' => $request->post_summary_ar,
                    'post_summary_en' => $request->post_summary_en,
                    'post_details_ar' => $request->post_details_ar,
                    'post_details_en' => $request->post_details_en,
                    'post_language' => $request->post_language,
                    'post_status' => $request->post_status,
                    'post_added_date' => $request->post_added_date,
                    'department_id' => $request->department_id,
                    'admin_id' => Auth::guard('admin')->user()->id,
                ]);
            }

            return $this->returnSuccessMessage(trans('general.add_success_message'));

        } catch (\Exception $exception) {
            return $this->returnError(trans('general.try_catch_error_message'), '500');
        }


    }

    ////////////////////////////////////////////////////////////////////////
    ///update Main Photo function
    public function updateMainPhoto(Request $request, $id)
    {

        $post = Post::find($id);

        if ($request->hasFile('file')) {
            if (!empty($post->photo)) {
                Storage::delete($post->photo);
                $photoPath = $request->file('file')->store('posts/' . $id);
            } else {
                $photoPath = $request->file('file')->store('posts/' . $id);
            }
        } else {
            $photoPath = $post->photo;
        }
        $post->photo = $photoPath;
        $post->save();
        return response(['status' => true], 200);

    }

    ////////////////////////////////////////////////////////////////////////
    /// delete Main Photo function
    public function deleteMainPhoto(Request $request)
    {
        if ($request->ajax()) {
            $post = Post::find($request->id);
            Storage::delete($post->photo);
            $post->photo = null;
            $post->save();
            return response(['status' => true], 200);
        }
    }

    ////////////////////////////////////////////////////////////////////////
    /// upload Other Photos function
    public function uploadOtherPhotos(Request $request, $pid)
    {

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('posts/' . $pid);
            $file = new File();
            $file->file_name = $request->file('file')->getClientOriginalName();
            $file->file_size = $request->file('file')->getSize();
            $file->file_path = 'posts/' . $pid;
            $file->file_after_upload = $request->file('file')->hashName();
            $file->full_path_after_upload = $filePath;
            $file->file_mimes_type = $request->file('file')->getMimeType();
            $file->file_type = 'post';
            $file->relation_id = $pid;
            $file->save();
        }
        return response(['status' => true, 'id' => $file->id], 200);
    }

    ////////////////////////////////////////////////////////////////////////
    /// delete Other Photo function
    public function deleteOtherPhoto(Request $request)
    {
        if ($request->ajax()) {
            $file = File::find($request->id);
            Storage::delete($file->full_path_after_upload);
            $file->delete();
            return response($file);
        }
    }

    ////////////////////////////////////////////////////////////////////////
    /// post Destroy
    public function destroy(Request $request)
    {
        try {
            if ($request->ajax()) {
                $post = Post::find($request->id);
                if (!empty($post->photo)) {
                    Storage::delete($post->photo);
                }
                ////////////////////Start delete files
                $files = File::where('relation_id', $request->id)->get();
                foreach ($files as $file) {
                    Storage::delete($file->full_path_after_upload);
                    $file->delete();
                    Storage::deleteDirectory($file->file_path);
                }
                //////////////////// End  delete files
                $post->delete();
                return $this->returnSuccessMessage(trans('general.delete_success_message'));
            }
        } catch (\Exception $exception) {
            return $this->returnError(trans('general.try_catch_error_message'), '500');

        }
    }
}
