<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Content;
use DB;

class ContentController extends Controller
{
    public function showContent(Request $request){
        $modid = $request->modid;
        $contenttitle = $request->contenttitle;
        $cont = Content::where('title','=',$contenttitle)->first();
        $username = $request->username;
        $created_at = $request->created_at;
        $mod = Module::find($modid);
        $user = User::where('name','=',$username)->first();
        if($user->headphoto==null){
            $userpoto ='front/image/photo.jpg';
        }
        else{
            $userpoto = $user->headphoto;
        }
        $result = DB::table('users')
            ->leftJoin('contents', 'users.id', 'contents.user_id')
            ->leftJoin('comments', 'contents.id', 'comments.content_id')
            ->where('contents.id','=',$cont->id)
            ->orWhere('comments.content_id','=',$cont->id)->get();
        return view('front.content',compact('mod','cont','username','created_at','userpoto','result'));
    }
}
