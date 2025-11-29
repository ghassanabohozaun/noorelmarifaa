<?php

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\PostRepository;

class PostService
{
    protected $postRepository;
    // __construct
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    // get one
    public function getOne($id)
    {
        $post = $this->postRepository->getOne($id);
        if (!$post) {
            return false;
        }

        return $post;
    }

    // get all
    public function getAll()
    {
        return $this->postRepository->getAll();
    }

    // get active
    public function getActive()
    {
        return $this->postRepository->getActive();
    }

    // create
    public function create($data)
    {
        $post = $this->postRepository->create($data);
        if (!$post) {
            return false;
        }
        return $post;
    }

    // update
    public function update($data)
    {
        $post = self::getOne($data['id']);
        if (!$post) {
            return false;
        }
        $post = $this->postRepository->update($post, $data);
        if (!$post) {
            return false;
        }

        return $post;
    }

    // destroy
    public function destroy($id)
    {
        $post = self::getOne($id);


         if ($post->children()->count() > 0 || !$post) {
            return false;
        }

        $post = $this->postRepository->destroy($post);
        if (!$post) {
            return false;
        }
        return $post;
    }

    // chane status
    public function changeStatus($id, $status)
    {
        $post = self::getOne($id);
        if (!$post) {
            return false;
        }
        $post = $this->postRepository->changeStatus($post , $status);
        if (!$post) {
            return false;
        }
        return $post;
    }
}
