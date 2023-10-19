<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    
        {
            $request->validate([
                'name'          => 'required',
                'email'         => 'required|email',
                'message'=> 'required',
               
            ]);
    
    
            $contact = new User;
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->password = $request->message;
            $contact->save();
    
            return response()->json(['success'=>'Successfully']);
        }
    }
    public function forgotPassword(){
        return view("auth/forgot");
    }

    public function loginUser(Request $request){
        $request->validate([ 
            "email"=> "required",
            "message"=> "required"  
         ]);

         $user = User::where("email", $request->input('email'))->where("password", $request->message)->first();
         if($user){
            return response()->json(["success"=> "Login Successfully"]);
         }
        else {
            return response()->json(["success"=> "Failed"]);
        }
    }
    
}
