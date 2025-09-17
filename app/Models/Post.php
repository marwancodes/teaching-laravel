<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasUlids;
    // Primary key configuration
    protected $primaryKey = 'id';
    // protected $keyType = 'int';
    protected $keyType = 'string'; // UUID - Universal Unique Identifier
    public $incrementing = true;


    protected $table = "posts"; // table name

    protected $fillable = ['title', 'media', 'content', 'author']; // fields can be updated

    protected $guarded = ['id']; // fields that cannot be updated

    // Define the relationship to Comment
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
