<?php

namespace App\Repositories\Dashboard;

use App\Models\Post;

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
        return Post::create($data);
    }

    // update
    public function update($post, $data)
    {
        return $post->update($data);
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
