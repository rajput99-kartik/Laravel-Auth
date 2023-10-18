<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view("auth/home");
    }
    public function registerUser(){
        
        return view("auth/register");
    }

    public function submitRegister(Request $request){
        dd($request->all());
        return view("auth/forgot");
    }
    public function forgotPassword(){
        return view("auth/forgot");
    }
    
}
