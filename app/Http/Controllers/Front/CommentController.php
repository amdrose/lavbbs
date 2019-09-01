<?php

namespace App\Http\Controllers\Front;

use App\Models\Comment;
use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function comment(Request $request){
        $user_id = $request->input('user_id');
        $content_id = $request->input('content_id');
        $cont = Content::find($content_id)->first();
        return view('front.comment',compact('user_id','cont','content_id'));
    }
    public function commentdeal(Request $request){
        $userid = $request->user_id;
        $contentid = $request->content_id;
        $message = $request->message;
        $com = new Comment();
        $com->content_id = $contentid;
        $com->user_id = $userid;
        $com->message = $message;
        $stat = $com->save();
        if($stat){
            return redirect()->route('inc.prompt', ['notic' => 'ok', 'message' => '评论成功！', 'tiaozhuan' => 'front.user']);
        }
        else{
            return redirect()->back('302');
        }

    }
}
