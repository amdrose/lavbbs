<?php

namespace App\Http\Controllers\Front;

use App\Models\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Module;
use Auth;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function indexShow(){
        //获取模板对象

        $mod = Module::all();
        //获取文件对象
        $fle = File::all();

        return view('front.index',compact('mod','fle'));
    }



}
