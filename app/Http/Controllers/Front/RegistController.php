<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\RegistRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistController extends Controller
{
    //
    public function regist(){
        return view('front.regist');
    }


    //用户注册处理
    public function registdeal(RegistRequest $request){
        if($request){
            $name = $request->user;
            $password = $request->password;
            $user = new User();
            $user->name = $name;
            $user->password = $password;
            $stat = $user->save();
            if($stat){
                return redirect()->route('inc.prompt', ['notic' => 'ok', 'message' => '注册成功！', 'tiaozhuan' => 'front.login']);
            }
        }
        else{
            return redirect()->route('inc.prompt', ['notic' => 'ok', 'message' => '注册失败，请重试！', 'tiaozhuan' => 'front.regist']);
        }
    }
}
