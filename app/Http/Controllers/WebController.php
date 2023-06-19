<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WebController extends Controller
{
    function getposts(){
        // $posts=[
        //  ["title"=>"post1","body"=>"post1post1post1"],
        //  ["title"=>"post2","body"=>"post2post2post2"]
        // ];
        $posts=Post::all();
     return view("web.posts",compact("posts"));
    }

    function test($name,Request $request) {
        $data=$request->all();
        //    return view('web.test',compact("name"));
        return view('web.test',["name"=>$name,"data"=>$data]);
        }


}
