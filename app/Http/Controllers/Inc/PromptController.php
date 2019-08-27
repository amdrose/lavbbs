<?php

namespace App\Http\Controllers\Inc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromptController extends Controller
{
    //
    public function showPrompt(){
        //传入参数
        return view('inc.remind');
    }
}
