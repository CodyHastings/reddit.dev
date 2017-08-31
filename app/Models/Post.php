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

       public static function search($q)
    {
      
        $posts = Post::where('title', 'like', '%' . $q . '%')->orWhere('content', 'like', '%' . $q . '%')->paginate(4);
   
        return $posts;
    }

}
