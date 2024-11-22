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
        // Migration for replies table
        Schema::create('replies', function (Blueprint $table) {
            $table->uuid('id')->primary(); // UUID as the primary key
            $table->foreignUuid('comment_id')->constrained('comments')->onDelete('cascade'); // Foreign key for comments
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
        Schema::dropIfExists('replies');
    }
};
