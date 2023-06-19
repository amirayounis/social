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
protected $fillable=["title","body"];
// realations  ..................
public function comments()
{
    return $this->hasMany(Comment::class);
}

}
