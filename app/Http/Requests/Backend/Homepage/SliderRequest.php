<?php

namespace App\Http\Requests\Backend\Homepage;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'image_input'   => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'image_input.required'     => 'Please select a image',
        ];
    }
}
