<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comment"; // table name

    protected $fillable = ['author', 'body', 'post_id']; // fields can be updated

    protected $guarded = ['id']; // fields that cannot be updated

    // Define the relationship to Post
    public function post() {
        return $this->belongsTo(Post::class);
    }
}
