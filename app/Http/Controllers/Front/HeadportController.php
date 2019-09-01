<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HeadportController extends Controller
{
    public function show(){
        return view('front.headport');
    }
    //头像上传处理
    public function headdeal(Request $request){
        $headport = $request->file('headport');
        $reaname = $headport->getClientOriginalName();
        if($headport->isValid()){
            $reapath = $headport->getRealPath();
            $savename = '/uploads/'.$reaname;
            $stat = Storage::disk('public')->put($reaname,file_get_contents($reapath));
           if($stat) {
               $id = auth('admin')->user()->id;
               $user = User::find($id);
               $user->headphoto = $savename;
               $user->update();
               if ($user) {
                   return redirect()->route('inc.prompt', ['notic' => 'ok', 'message' => '修改成功', 'tiaozhuan' => 'front.user']);
               } else {
                   return redirect()->route('inc.prompt', ['notic' => 'error', 'message' => '修改失败', 'tiaozhuan' => 'front.headport']);
               }
           }
           else{
               return redirect()->route('inc.prompt', ['notic' => 'error', 'message' => '修改失败', 'tiaozhuan' => 'front.headport']);
           }
        }

    }
}
