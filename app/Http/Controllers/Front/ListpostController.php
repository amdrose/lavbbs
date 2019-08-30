<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Module;
use App\Models\Content;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ListpostController extends Controller
{
    //
    public function showPost(Request $request){
        //查询模板对象
        $mod = Module::all();
        //获取到页面提交的模板id
        $getnum = request()->id;
        $result1 = Module::where('id','=',$getnum)->first();
        $modulename = $result1->module_name;
        $result2 = Content::where('module_id','=',$getnum)->paginate(5);
        $result3 = DB::table('contents')->join('users','contents.user_id','=','users.id')->where('module_id','=',$getnum)->get();
        return view('front.listpost',compact('mod','result2','getnum','modulename','result1','result3'));
    }
}
