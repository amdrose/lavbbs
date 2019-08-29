<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Content;

class UserController extends Controller
{
    public function showMes(){
        $username = auth('admin')->user()->name;
        $userid = User::where('name','=',$username)->first();
        $content = Content::where('user_id','=',$userid->id)->get();
        return view('front.user',compact('content'));
    }
}
