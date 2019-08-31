<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\RegistRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistController extends Controller
{
    //
    public function regist(){
        return view('front.regist');
    }

    public function registdeal(RegistRequest $request){

    }
}
