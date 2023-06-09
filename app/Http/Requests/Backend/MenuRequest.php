<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'title'     => 'required|string|max:50|unique:menus,title,'.$this->menu,
        ];
    }

    public function messages()
    {
        return [
            'title.required'            => 'Please enter a title',
            'title.unique'              => 'Title is already in use',
        ];
    }
}
