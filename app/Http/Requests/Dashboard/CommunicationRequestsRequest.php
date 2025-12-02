<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class CommunicationRequestsRequest extends FormRequest
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
            'communication_sender' => 'required',
            'communication_email' => 'required|email',
            'communication_title' => 'required',
            'communication_details' => 'required',
            'communication_status' => 'sometimes|nullable|in:0,1',
            'g-recaptcha-response' => 'required|captcha'
        ];
    }

    public function messages()
    {
        return [
            'required'=>trans('communicationRequests.required'),
            'communication_sender.required' => trans('communicationRequests.sender_required'),
            'communication_email.required' => trans('communicationRequests.email_required'),
            'communication_email.email' => trans('communicationRequests.email_email'),
            'communication_title.required' => trans('communicationRequests.title_required'),
            'communication_details.required' => trans('communicationRequests.details_required'),
            'in' => trans('communicationRequests.in'),
        ];
    }
}
