<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
}
