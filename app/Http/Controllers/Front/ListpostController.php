<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Module;
use App\Models\Content;

class ListpostController extends Controller
{
    //
    public function showPost(){
        //查询模板对象
        $mod = Module::all();
        //获取到页面提交的模板id
        $getnum = request()->get('id');
        $result1 = Module::where('id','=',$getnum)->first();
        $modulename = $result1->module_name;
        $result2 = Content::where('module_id','=',$getnum)->paginate(5);
        //->content->paginate(5);
        return view('front.listpost',compact('mod','modulename','result2','getnum'));
    }
}
