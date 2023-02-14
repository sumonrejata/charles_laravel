<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tags()
    {
       //return $this->belongsToMany(Tag::class,'post_tag','id');
        return $this->belongsToMany(Tag::class);
    }

    // public function Category(){
    //     return $this->belongsTo(Category::class,'category_id');
    // }

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
