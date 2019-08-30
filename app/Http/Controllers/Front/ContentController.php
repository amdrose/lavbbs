<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Content;

class ContentController extends Controller
{
    public function showContent(Request $request){
        $modid = $request->modid;
        $contentid = $request->contentid;
        $username = $request->username;
        $created_at = $request->created_at;
        $mod = Module::find($modid);
        $user = User::where('name','=',$username)->first();
        if($user->headphoto==null){
            $userpoto = 'front/image/photo.jpg';
        }
        else{
            $userpoto = $user->headphoto;
        }

        $cont = Content::find($contentid);
        return view('front.content',compact('mod','cont','username','created_at','userpoto'));
    }
}
