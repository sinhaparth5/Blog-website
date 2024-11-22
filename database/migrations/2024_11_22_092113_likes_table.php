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
        Schema::create('likes', function (Blueprint $table) {
            $table->uuid('id')->primary(); // UUID as the primary key
            $table->morphs('likeable'); // Allows likes on both articles and comments
            $table->foreignUuid('user_id')->constrained('users')->onDelete('cascade'); // Foreign key for users
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('likes');
    }
};
