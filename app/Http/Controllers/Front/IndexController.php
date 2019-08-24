<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Module;

class IndexController extends Controller
{
    public function indexShow(){
        //获取模板对象
        $mod = Module::all();
        return view('front.index',compact('mod'));
    }




}
