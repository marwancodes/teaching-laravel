<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        // php artisan make:migration add_media_to_posts_table --table=posts
        // php artisan migrate

        Schema::table('posts', function (Blueprint $table) {
            // adding a new column 'media' after the 'title' column
            $table->string('media')->after('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // removing the 'media' column
            $table->dropColumn('media');
        });
    }
};
