<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Content;

class UserOpController extends Controller
{
    //
    public function update(Request $request){
        $conid = $request->contentid;
        $con = Content::where('id','=',$conid)->first();

        return view('front.userupdate',compact('con'));


    }

    public function delete(){

    }
}
