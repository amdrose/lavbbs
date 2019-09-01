<?php

namespace App\Http\Controllers\Inc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromptController extends Controller
{
    //
    public function showPrompt(Request $request){
        //传入参数
        //提示的图片
        $notic = $request->notic;
        //现实的信息
        $message = $request->message;
        //跳转路由
        $tiaozhuan = $request->tiaozhuan;
        return view('inc.remind',compact('notic','message','tiaozhuan'));
    }
}
