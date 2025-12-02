<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class EmploysVolunteersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name'=>'required',
            'identification'=>'required|digits:9|numeric',
            'birthday'=>'required',
            'mobile_number'=>'required|digits:10|numeric',
            'gender'=>'required|in:male,female',
            'order_type'=>'required|in:employ_order,volunteer_order',
            'address'=>'required',
            'notes'=>'required',
            'qualification'=>'required',
            'specialization'=>'required',
            'g-recaptcha-response' => 'required|captcha'
        ];
    }

    public function messages()
    {
        return [
            'required'=>trans('forms.required'),
            'numeric'=>trans('forms.numeric'),
            'in'=>trans('forms.in'),
            'identification.digits'=>trans('forms.identification_digits'),
            'mobile_number.digits'=>trans('forms.mobile_number_digits'),
        ];
    }
}
