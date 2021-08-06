<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
   protected $fillable = [
   	'name','email'

   ];
   public function phone(){
   		return $this->hasone(phone::class);

   }
    public function post(){
   		return $this->hasMany(Post::class);

   }
}
