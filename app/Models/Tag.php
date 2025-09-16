<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags"; // table name

    protected $fillable = ['title']; // fields can be updated

    protected $guarded = ['id']; // fields that cannot be updated

    public function posts() {
        return $this->belongsToMany(Post::class);
    }

}
