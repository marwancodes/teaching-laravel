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
        Schema::dropIfExists('posts');

        Schema::create('posts', function (Blueprint $table) {
            // we make this migration to avoid duplicate entries in the pivot table in post_tag table and make then unique
            // $table->unique(['post_id', 'tag_id']);

            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('media')->after('title');
            $table->text('content');
            $table->string('author');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('media')->after('title');
            $table->text('content');
            $table->string('author');
            $table->timestamps();
        });
    }
};
