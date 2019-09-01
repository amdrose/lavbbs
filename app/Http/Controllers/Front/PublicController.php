<?php

namespace App\Http\Controllers\Front;
use App\Models\Module;

use Illuminate\Http\Request;
use App\Http\Requests\PublicRequest;
use App\Http\Controllers\Controller;
use App\Models\Content;
use Auth;

class PublicController extends Controller
{
    //展示发布视图
    public function show(){
        //查询分类板块
        $mod = Module::all();
        return view('front.public',compact('mod'));
    }

    //添加帖子
    public function add(PublicRequest $request){
        $userid = auth('admin')->user()->id;
        $moudleId = $request->input('module_id');
        $titel = $request->input('title');
        $conntent = $request->input('content');
        $mod = new Content();
        $mod->module_id = $moudleId;
        $mod->user_id = $userid;
        $mod->title = $titel;
        $mod->content = $conntent;
        $status = $mod->save();
        if($status){
            return redirect()->route('inc.prompt', ['notic' => 'ok', 'message' => '添加成功！', 'tiaozhuan' => 'front.index']);
        }
        else{
            return redirect()->route('inc.prompt', ['notic' => 'error', 'message' => '添加失败，请重试！', 'tiaozhuan' => 'front.public']);
        }
//        create方法
//        $data = [
//            'module_id'=>$moudleId,
//            'user_id'=>$userid,
//            'title'=> $titel,
//            'content'=>$conntent,
//        ];
//        $mod = Content::created($data);

    }
}
