<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;

use Auth;


class LoginController extends Controller
{
    public function login(){
        return view('front.login');
    }

    //用户登录处理
    public function userDeal(LoginRequest $request){
        $username = $request->input('user');
        $password = $request->input('password');
        // 验证用户名登录方式
        $user= auth('admin')->attempt(
            ['name' => $username, 'password' => $password]);
//        dd($request->only('user','password'));
//           $user = auth('admin')->attempt($request->only('user','password'));
           if($user){
               return redirect()->route('front.index');
           }else
           {
               return redirect('/prompt');
           }
            // The blog post is valid, store in database...
        }
        //注销处理
        public function loginout(){
            auth('admin')->logout();
            return redirect()->back();
        }


}
