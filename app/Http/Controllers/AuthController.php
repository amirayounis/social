<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
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
  function trainerform(){
    return view("trainerregister");
 }
 function trainer(Request $request){
    $request['password']=Hash ::make($request['password']);
    $user= User::create($request->except("car_lances",'img'));
// store the rest info in trainer table
$img=md5(microtime()).".".$request->img->extension();
$request->img->storeAs("public/imgs",$img);
    Trainer ::create([
        "car_lances"=>$request["car_lances"],
        "img"=>$img,
        'user_id'=>$user['id']
    ]);
    auth()->login($user);
  return redirect("/posts");
 }

}
