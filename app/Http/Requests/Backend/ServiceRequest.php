<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'title'         => 'required|string|max:50',
            'description'   => 'required|string|max:191',
            'image_input'   => request()->method() == 'POST' ? 'required':'nullable'.'|image|mimes:jpeg,png,jpg',
        ];
    }

    public function messages()
    {
        return [
            'title.required'            => 'Please enter a title',
            'description.required'      => 'Please write a small description',
            'description.max'           => 'Description must be less than 200 characters',
            'title.max'                 => 'Title must be less than 50 characters',
            'image_input.required_if'   => 'Please select a image',
        ];
    }
}
