<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $guarded = [];

    public function blog(){
        return $this->belongsTo(Category::class , 'category_id' , 'id');
    }
}
