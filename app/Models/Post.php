<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){

        return $this->belongsTo(User::Class);

    }
//    public function setPostImageAttribute($value){
//
//        $this->attributes['post_image'] = asset($value);
//
//    }
    public function getPostImageAttribute($value){
        return asset($value);
    }
}
