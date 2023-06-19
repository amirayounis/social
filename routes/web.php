<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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
// ..............use controller.......................
Route::get('/test2/{name}', [WebController::class,"test"]);

// ...............postscrud.......................................
// get all data
Route ::get("/posts",[PostController::class,"index"])->name("posts");
// goto form
Route::get("/posts/create",[PostController::class,"create"])->name("posts.create");
// send req from form
Route::post("/posts/store",[PostController::class,"store"])->name("posts.store");
// delete from database
Route::delete("/posts/{id}/delete",[PostController::class,"remove"])->name("posts.remove");
// goto edit form
Route::get("/posts/{post}/edit",[PostController::class,"edit"])->name("posts.edit");
// send req editfrom form
Route::put("/posts/{post}/update",[PostController::class,"update"])->name("posts.update");
// get 1 post
Route::get("posts/{post}",[PostController::class,"show"])->name("posts.show");
// -----------------------------------------
Route ::resource("comments",CommentController::class);
