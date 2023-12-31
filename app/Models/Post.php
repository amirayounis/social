<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // table
    protected $table="posts";
// fillable columns
protected $fillable=["title","body",'img',"user_id"];
// realations  ..................
public function comments()
{
    return $this->hasMany(Comment::class);
}
public function user(){
    return $this->belongsTo(User::class);
 }

}
