<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $table="trainer";
   public $timestamps=false;
    protected $fillable=["car_lances",'img','user_id'];
     public function user(){
        return $this->belongsTo(User::class);
     }
}
