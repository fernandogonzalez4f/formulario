<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Baldor extends Controller
{
    public function index(){
        return view('archivo');
    }

    public function sumita($variable){
        return view ('suma3', ['variable'=>$variable])
        ->with('variable',$variable);
    }
}