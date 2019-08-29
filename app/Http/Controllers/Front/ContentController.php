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
        $mod = Module::find($modid);
        $cont = Content::find($contentid);
        return view('front.content',compact('mod','cont'));
    }
}
