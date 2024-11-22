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
       // Migration for articles table
        Schema::create('articles', function (Blueprint $table) {
            $table->uuid('id')->primary(); // UUID as the primary key
            $table->foreignUuid('author_id')->constrained('authors')->onDelete('cascade'); // Foreign key for authors
            $table->string('title');
            $table->text('content');
            $table->string('slug')->unique();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('articles');
    }
};
