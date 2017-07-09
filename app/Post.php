<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
   protected $fillable = ['title', 'content'];
   protected $table = 'posts'; 
   
   public function user(){
       return $this->belongsTo('App\User');
   }
   
   public function photos(){
       return $this->morphMany('App\Photo', 'imageable');
   }
  
}
