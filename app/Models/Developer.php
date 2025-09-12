<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $fillable = [
        'name',
        'age',
        'email',
        'stack',
    ];

    // public static function allDevs() {
    //     return [
    //         ['name' => 'Alice', 'age' => 22, 'email' => 'alice@gmail.com'],
    //         ['name' => 'Anas', 'age' => 27, 'email' => 'anas@gmail.com'],
    //         ['name' => 'Marwan', 'age' => 30, 'email' => 'marwan@gmail.com']
    //     ];
    // }

    /** @use HasFactory<\Database\Factories\DeveloperFactory> */
    use HasFactory;
}
