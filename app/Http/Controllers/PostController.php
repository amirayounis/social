<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
// return all data
function index(){
    $posts=Post::all();
    return view("posts.posts",compact("posts"));
}

// return form ui
    function create(){
        return view("posts.create");
    }
//    store in database
    function store(Request $request){
    //    validation
    $request->validate([
    'title'=>'required',
    'body'=>'required',
    "img"=>'image|mimes:png,jpg,avif,jpeg'
    ]);
    $img=md5(microtime()).".".$request->img->extension();
    $request->img->storeAs("public/imgs",$img);
    //dd($img);
        // insert in database
        $post= Post::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'img'=>$img,
            'user_id'=>auth()->id()
        ]);

  return redirect()->route("posts");
    }

    // delete post
    function remove( Post $id){
        // delete in database
        //  $post=Post::find($id);
        //  dd($id);
         $id->delete();
  return redirect()->route("posts");
    }
   function edit(Post $post){
   return view("posts.edite",compact("post"));
   }
   function update(Post $post,Request $request){
   $post->update($request->all());
   return redirect()->route("posts");
   }
   function show(Post $post){
     return view("posts.post",compact("post"));
   }
}
