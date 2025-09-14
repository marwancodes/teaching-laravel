<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts"; // table name

    protected $fillable = ['title', 'media', 'content', 'author']; // fields can be updated

    protected $guarded = ['id']; // fields that cannot be updated

    // Define the relationship to Comment
    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
