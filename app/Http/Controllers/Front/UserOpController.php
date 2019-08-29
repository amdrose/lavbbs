<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Content;

class UserOpController extends Controller
{
    //
    public function show(Request $request){
        $conid = $request->contentid;
        $con = Content::where('id','=',$conid)->first();

        return view('front.userupdate',compact('con'));


    }

    public function update(Request $request,$id){
       $title = $request->title;
       $cont = $request->cont;
       $date = [
         'title'=>$title,
         'content'=>$cont,
       ];
       $stat = Content::where('id',$id)->update($date);
       if($stat>0){
           return redirect()->route('front.user');
       }
       else{
           echo "修改失败";
           return redirect()->back();
       }
    }



    public function delete($contentid){
        $stat = Content::destroy($contentid);
        return redirect()->route('front.user');
    }
}
