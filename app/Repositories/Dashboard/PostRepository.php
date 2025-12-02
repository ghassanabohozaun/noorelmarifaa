<?php

namespace App\Repositories\Dashboard;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostRepository
{
    // get one
    public function getOne($id)
    {
        return Post::find($id);
    }

    // get all
    public function getAll()
    {
        return Post::orderByDesc('created_at')->latest()->paginate(10);
    }

    // create
    public function create($data)
    {
        if ($data['post_language'] == 'ar') {
            $post = Post::create([
                'post_title_ar' => $data['post_title_ar'],
                'post_title_en' => null,
                'post_summary_ar' => $data['post_summary_ar'],
                'post_summary_en' => null,
                'post_details_ar' => $data['post_details_ar'],
                'post_details_en' => null,
                'post_language' => $data['post_language'],
                'post_status' => $data['post_status'],
                'post_added_date' => $data['post_added_date'],
                'department_id' => $data['department_id'],
                'admins_id' => Auth::guard('admin')->id(),
                'photo' => $data['photo'],
            ]);
        } elseif ($data['post_language'] == 'en') {
            $post = Post::create([
                'post_title_ar' => null,
                'post_title_en' => $data['post_title_en'],
                'post_summary_ar' => null,
                'post_summary_en' => $data['post_summary_ar'],
                'post_details_ar' => null,
                'post_details_en' => $data['post_details_en'],
                'post_language' => $data['post_language'],
                'post_status' => $data['post_status'],
                'post_added_date' => $data['post_added_date'],
                'department_id' => $data['department_id'],
                'admins_id' => Auth::guard('admin')->id(),
                'photo' => $data['photo'],
            ]);
        } elseif ($data['post_language'] == 'ar_en') {
            $post = Post::create([
                'post_title_ar' => $data['post_title_ar'],
                'post_title_en' => $data['post_title_en'],
                'post_summary_ar' => $data['post_summary_ar'],
                'post_summary_en' => $data['post_summary_en'],
                'post_details_ar' => $data['post_details_ar'],
                'post_details_en' => $data['post_details_en'],
                'post_language' => $data['post_language'],
                'post_status' => $data['post_status'],
                'post_added_date' => $data['post_added_date'],
                'department_id' => $data['department_id'],
                'admins_id' => Auth::guard('admin')->id(),
                'photo' => $data['photo'],
            ]);
        }

        return $post;
    }

    // update
    public function update($post, $data)
    {
        if ($data['post_language'] == 'ar') {
            $post = $post->update([
                'post_title_ar' => $data['post_title_ar'],
                'post_title_en' => null,
                'post_summary_ar' => $data['post_summary_ar'],
                'post_summary_en' => null,
                'post_details_ar' => $data['post_details_ar'],
                'post_details_en' => null,
                'post_language' => $data['post_language'],
                'post_status' => $data['post_status'],
                'post_added_date' => $data['post_added_date'],
                'department_id' => $data['department_id'],
                'admins_id' => Auth::guard('admin')->id(),
                'photo' => $data['photo'] ?? '',
            ]);
        } elseif ($data['post_language'] == 'en') {
            $post = $post->update([
                'post_title_ar' => null,
                'post_title_en' => $data['post_title_en'],
                'post_summary_ar' => null,
                'post_summary_en' => $data['post_summary_ar'],
                'post_details_ar' => null,
                'post_details_en' => $data['post_details_en'],
                'post_language' => $data['post_language'],
                'post_status' => $data['post_status'],
                'post_added_date' => $data['post_added_date'],
                'department_id' => $data['department_id'],
                'admins_id' => Auth::guard('admin')->id(),
                'photo' => $data['photo'] ?? '',
            ]);
        } elseif ($data['post_language'] == 'ar_en') {
            $post = $post->update([
                'post_title_ar' => $data['post_title_ar'],
                'post_title_en' => $data['post_title_en'],
                'post_summary_ar' => $data['post_summary_ar'],
                'post_summary_en' => $data['post_summary_en'],
                'post_details_ar' => $data['post_details_ar'],
                'post_details_en' => $data['post_details_en'],
                'post_language' => $data['post_language'],
                'post_status' => $data['post_status'],
                'post_added_date' => $data['post_added_date'],
                'department_id' => $data['department_id'],
                'admins_id' => Auth::guard('admin')->id(),
                'photo' => $data['photo'] ?? '',
            ]);
        }

        return $post;
    }

    // destroy
    public function destroy($post)
    {
        return $post->forceDelete();
    }

    // chane status
    public function changeStatus($post, $status)
    {
        return $post->update([
            'status' => $status,
        ]);
    }
}
