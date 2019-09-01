<?php

namespace App\Http\Controllers\Front;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    //
    public function searach(Request $request){
        $keyword = $request->keyword;
        $result = DB::table('contents')
            ->join('users','contents.user_id','=','users.id')
            ->where('title','like',"%$keyword%")
            ->orwhere('content','like',"%$keyword%")
            ->paginate(5);
        return view('front.searach',compact('result','keyword'));
    }
}
