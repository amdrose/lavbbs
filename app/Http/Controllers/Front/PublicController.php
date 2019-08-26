<?php

namespace App\Http\Controllers\Front;
use App\Models\Module;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    //展示发布视图
    public function show(){
        //查询分类板块
        $mod = Module::all();
        return view('front.public',compact('mod'));
    }

    //添加帖子
    public function add(Request $request){


    }
}
