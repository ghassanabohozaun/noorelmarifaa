<?php

namespace App\Http\Controllers\Dashboard;

use App\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\PostCreateRequest;
use App\Http\Requests\Dashboard\PostUpdateRequest;
use App\Services\Dashboard\DepartmentService;
use App\Services\Dashboard\PostService;
use App\Utils\ImageManagerUtils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    protected $postService, $departmentService, $imageManagerUtils;
    // __construct
    public function __construct(PostService $postService, DepartmentService $departmentService, ImageManagerUtils $imageManagerUtils)
    {
        $this->postService = $postService;
        $this->departmentService = $departmentService;
        $this->imageManagerUtils = $imageManagerUtils;
    }

    // index
    public function index()
    {
        $title = trans('posts.posts');
        $posts = $this->postService->getAll();
        return view('dashboard.posts.index', compact('title', 'posts'));
    }

    // create function
    public function create()
    {
        $title = __('posts.create_new_post');
        $departments = $this->departmentService->getActiveAll();
        return view('dashboard.posts.create', compact('title', 'departments'));
    }

    // store
    public function store(PostCreateRequest $request)
    {
        $data = $request->only(['post_title_ar', 'post_title_en', 'post_summary_ar', 'post_summary_en', 'post_details_ar', 'post_details_en', 'post_language', 'post_status', 'post_added_date', 'department_id', 'photo']);

        $post = $this->postService->create($data);
        if (!$post) {
            return response()->json(['status' => false], 500);
        }

        return response()->json(['status' => true, 'data' => $post], 200);
    }

    // edit
    public function edit($id = null)
    {
        $post = $this->postService->getOne($id);
        if (!$post) {
            flash()->error(__('general.no_record_found'));
            return redirect()->route('dashboard.posts.index');
        }
        $title = __('posts.update_post');
        $departments = $this->departmentService->getActiveAll();

        return view('dashboard.posts.edit', compact('title', 'post', 'departments'));
    }

    // update
    public function update(PostUpdateRequest $request, string $id)
    {
        $data = $request->only(['id', 'post_title_ar', 'post_title_en', 'post_summary_ar', 'post_summary_en', 'post_details_ar', 'post_details_en', 'post_language', 'post_status', 'post_added_date', 'department_id', 'photo']);

        $page = $this->postService->update($data);
        if (!$page) {
            return response()->json(['status' => false], 500);
        }
        return response()->json(['status' => true], 200);
    }

    public function postPhotos($id = null)
    {
        $post = $this->postService->getOne($id);
        if (!$post) {
            flash()->error(__('general.no_record_found'));
            return redirect()->route('dashboard.posts.index');
        }
        $title = __('posts.post_photos');
        return view('dashboard.posts.post-photos', compact('title', 'id', 'post'));
    }

    // upload Other  Photos function
    public function uploadOtherPhotos(Request $request, $paid)
    {
        if ($request->hasFile('file')) {
            $photo_name = $this->imageManagerUtils->saveResizeImage($request['file'], 'post-photos', 1700, 1000);

            $file = new File();
            $file->file_name = $request->file('file')->getClientOriginalName();
            $file->file_size = $request->file('file')->getSize();
            $file->file_path = 'post-photos/' . $paid;
            $file->file_after_upload = $request->file('file')->hashName();
            $file->full_path_after_upload = $photo_name;
            $file->file_mimes_type = $request->file('file')->getMimeType();
            $file->file_type = 'post-photos';
            $file->relation_id = $paid;
            $file->save();
        }
        return response(['status' => true, 'id' => $file->id], 200);
    }

    // delete Other Photo function
    public function deleteOtherPhoto(Request $request)
    {
        if ($request->ajax()) {
            $file = File::find($request->id);
            $this->imageManagerUtils->removeImageFromLocal($file->full_path_after_upload, 'post-photos');
            $file->delete();
            return response($file);
        }
    }

    // post destroy
    public function destroy(Request $request)
    {
        if ($request->ajax()) {
            $post = $this->postService->destroy($request->id);
            if (!$post) {
                return response()->json(['status' => false], 500);
            }

            return response()->json(['status' => true, 'data' => $post], 200);
        }
    }
}
