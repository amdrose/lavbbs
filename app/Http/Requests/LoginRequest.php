<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'user' => 'required|alpha_num|between:1,10',
            'password' => 'required|between:1,16|alpha_num',
            'vcode'=> 'required|captcha'

        ];
    }
    public function messages()
    {
        return [
            'user.requid' => '户名不能为空',
            'user.alpha' => '只能是字符或者数字',
            'user.between' => '只能在1-10个字之间',
            'user.unique' => '用户名已存在',
            'password.required' => '密码不能为空',
            'password.between' => '密码只能在1-16个单词之间',
            'password,alp_num' => '密码只能是数字或者字母',
            'vcode.required'=>'验证码不能为空',
            'vcode.captcha'=>'验证码错误',
        ];
    }
}
