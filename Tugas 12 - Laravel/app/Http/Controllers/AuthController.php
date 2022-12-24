<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('halaman.register');
    }

    public function submit(Request $request){
        $first_name = $request['f_name'];
        $last_name = $request['l_name'];
        return view('halaman.welcome', ['first_name'=> $first_name, 'last_name'=>$last_name]);
    }
}
