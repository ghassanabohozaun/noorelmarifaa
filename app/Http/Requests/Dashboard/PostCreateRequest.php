<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'post_language' => 'required|in:ar,en,ar_en',
            'post_status' => 'required|in:enable,disable,pending',
            'post_added_date' => 'required',
            'department_id' => 'required|numeric',
            'photo' => 'required|image|mimes:jpeg,png,jpg',
            //'photo' => 'sometimes|nullable|image|mimes:jpeg,png,jpg',
        ];

        if ($this->input('post_language') == 'ar') {
            $rules['post_title_ar'] = 'required';
            $rules['post_summary_ar'] = 'required';
            $rules['post_details_ar'] = 'required';
        } elseif ($this->input('post_language') == 'en') {
            $rules['post_title_en'] = 'required';
            $rules['post_summary_en'] = 'required';
            $rules['post_details_en'] = 'required';
        } elseif ($this->input('post_language') == 'ar_en') {
            $rules['post_title_ar'] = 'required';
            $rules['post_summary_ar'] = 'required';
            $rules['post_details_ar'] = 'required';
            $rules['post_title_en'] = 'required';
            $rules['post_summary_en'] = 'required';
            $rules['post_details_en'] = 'required';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'post_title_ar.required' => trans('posts.post_title_ar_required'),
            'post_title_en.required' => trans('posts.post_title_en_required'),
            'post_summary_ar.required' => trans('posts.post_summary_ar_required'),
            'post_summary_en.required' => trans('posts.post_summary_en_required'),
            'post_details_ar.required' => trans('posts.post_details_ar_required'),
            'post_details_en.required' => trans('posts.post_details_en_required'),
            'post_language.required' => trans('posts.post_language_required'),
            'post_status.required' => trans('posts.post_status_required'),
            'post_added_date.required' => trans('posts.post_added_date_required'),
            'department_id.required' => trans('posts.department_id_required'),
            'department_id.numeric' => trans('posts.department_id_numeric'),
            'image' => trans('posts.image'),
            'in' => trans('posts.in'),
        ];
    }
}
