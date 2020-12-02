<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PruebaController extends Controller
{
    /*public function login(){
        return view('admon.login');
    }*/

    public function validarLogin(Request $request){
        $user = $request->input('user');
        $pass = $request->input('password');
        $key = Hash::make($request->input('key'));

        if ($user === 'raul.toledo'){
            $url='dashboard';
        } else {
            $url='login';
        }
        return view($url,[
            'user'=>$request->input('user'),
            'key'=>$key
        ]);
    }

    public function myLogin(Request $request){
        $user = $request->input('user');
        $pass = $request->input('password');
        $key = Hash::make($request->input('key'));

        if ($user === 'fernando.gonzalez'){
            $url='mydashboard';
        } else {
            $url='mylogin';
        }
        if ($pass === 'hola5241'){
            $pass='mydashboard';
        } else {
            $pass='mylogin';
        }
        return view($url,[
            'user'=>$request->input('user'),
            'password'=>$request->input('password'),
            'key'=>$key
        ]);
    }
}
