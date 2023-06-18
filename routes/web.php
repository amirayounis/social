<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/wellcome', function () {
    return view('welcome');
});

Route::get('/posts', function () {
echo "in lravel";
    return "<h1>posts</h1>";
});
// .........urls vars...............
Route::get('/post/{id}/{name}', function ($id,$name) {
    echo "in lravel";
        return "<h1>this is the $id post:$name</h1>";
    });
// ...........request.............
Route::get('/addpost', function (Request $req) {
    print_r($_GET);
    print_r($req->all());
   //  dd($req->all());
    return "<h1>$req[age]:$req[name]</h1>";
    });
// .............views............

// Route::get('/test', function () {
//     return view('web.test');
// });

// .............views with vars............

Route::get('/test2/{name}', function ($name,Request $request) {
$data=$request->all();
//    return view('web.test',compact("name"));
return view('web.test',["name"=>$name,"data"=>$data]);
});
Route ::get("/posts",function(){
    $posts=[
     ["title"=>"post1","body"=>"post1post1post1"],
     ["title"=>"post2","body"=>"post2post2post2"]
    ];
 return view("web.posts",compact("posts"));
});
