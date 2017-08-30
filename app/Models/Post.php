<?php

namespace App\Models;


use App\Models\BaseModel;

class Post extends BaseModel
{
   public static $rules = [
   'title' => 'required|max:200',
   'content' => 'required',
   'url' => 'required'
   ];

   public function user()
   {
   		return $this->belongsTo('\App\User', 'user_id');
   }


}
