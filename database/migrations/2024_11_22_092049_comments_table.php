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
        //
        // Migration for comments table
        Schema::create('comments', function (Blueprint $table) {
            $table->uuid('id')->primary(); // UUID as the primary key
            $table->foreignUuid('article_id')->constrained('articles')->onDelete('cascade'); // Foreign key for articles
            $table->foreignUuid('user_id')->constrained('users')->onDelete('cascade'); // Foreign key for users
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('comments');
    }
};
