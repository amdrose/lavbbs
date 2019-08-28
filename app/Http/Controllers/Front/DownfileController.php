<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DownfileController extends Controller
{
    //
    public function down(Request $request){
        $name =$request->name;
        $path = storage_path('/app/public/').$name;
        return response()->download($path);
    }
}
