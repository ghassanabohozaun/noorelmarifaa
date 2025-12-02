<?php

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\PostRepository;
use App\Utils\ImageManagerUtils;
use League\CommonMark\Extension\CommonMark\Node\Inline\Image;

class PostService
{
    protected $postRepository, $imageManagerUtils;
    // __construct
    public function __construct(PostRepository $postRepository, ImageManagerUtils $imageManagerUtils)
    {
        $this->postRepository = $postRepository;
        $this->imageManagerUtils = $imageManagerUtils;
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

    // create
    public function create($data)
    {
        if (array_key_exists('photo', $data) && $data['photo'] != null) {
            $photo_name = $this->imageManagerUtils->saveResizeImage($data['photo'], 'posts', 1700, 1000);
            $data['photo'] = $photo_name;
        }

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

        if (array_key_exists('photo', $data) && $data['photo'] != null) {
            //remove old photo
            $this->imageManagerUtils->removeImageFromLocal($post->photo, 'posts');
            $photo_name = $this->imageManagerUtils->saveResizeImage($data['photo'], 'posts', 1700, 1000);
            $data['photo'] = $photo_name;
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

        if (!$post) {
            return false;
        }

        foreach ($post->files as $file) {
            $this->imageManagerUtils->removeImageFromLocal($file->full_path_after_upload, 'post-photos');
        }

        if ($post->photo != null) {
            $this->imageManagerUtils->removeImageFromLocal($post->photo, 'posts');
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
        $post = $this->postRepository->changeStatus($post, $status);
        if (!$post) {
            return false;
        }
        return $post;
    }
}
