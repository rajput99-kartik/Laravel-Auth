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
    
}
