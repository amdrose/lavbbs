<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|between:1,20',
            'content' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.requird' => '标题不能为空',
            'title.between' => '标题字数只能在1-20个字之间',
            'content.required' => '内容不能为空',
        ];
    }
}
