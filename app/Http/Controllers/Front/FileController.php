<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Models\File;


class FileController extends Controller
{
    //
    public function showUpLoad(){
        return view('front.upload');
    }
    //上传文件
    public function upload(Request $request){
        $realname = $request->file('source')->getClientOriginalName();
        $upfile = $request->file('source');
        if($upfile->isValid()){
            $path = $upfile->getRealPath();
            $reapath = "/strong/app/public/".$realname;
            $user_id = auth('admin')->user()->id;
            $stat = Storage::disk('public')->put($realname,file_get_contents($path));
            $mod = new File();
            $mod->name = $realname;
            $mod->url = $reapath;
            $mod->user_id = $user_id;
            $stats = $mod->save();
            if($stat && $stats){
                return "上传成功";
            }
            else{
                return "上传失败";
            }

        }
    }
}
