<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentsController extends Controller
{
    //
    public function bin2dec(){
    	return view('bin2dec');
    }

    public function BorderRadiusPreviewer(){
    	return view('BorderRadiusPreviewer');
    }
}
