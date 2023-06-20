<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   function registerform(){
    return view("register");
   }
   function loginform(){
    return view("login");
   }
   function register(Request $request){
    $request['password']=Hash ::make($request['password']);
   $user= User::create($request->all());
   auth()->login($user);
 return redirect("/posts");
   }
   function logout(){
     auth()->logout();
    return view("login");
   }
   function login(Request $request){
     if(auth()->attempt($request->except("_token"))){
        return redirect()->route("posts");
     }
     return redirect("/login")->with("fail","email or password wrong");
  }

}
