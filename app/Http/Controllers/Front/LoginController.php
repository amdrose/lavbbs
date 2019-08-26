<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;



class LoginController extends Controller
{
    public function login(){
        return view('front.login');
    }

    //用户登录处理
    public function userDeal(LoginRequest $request){


            // The blog post is valid, store in database...
        }


}
