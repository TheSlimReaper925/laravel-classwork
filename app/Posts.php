<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public function comments()
    {
    	return $this->hasMany('App\Comments', 'post_id');
    }
}
