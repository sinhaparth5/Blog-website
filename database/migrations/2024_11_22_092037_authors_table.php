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
        //// Migration for authors table
        Schema::create('authors', function (Blueprint $table) {
            $table->uuid('id')->primary(); // UUID as the primary key
            $table->string('name');
            $table->string('email')->unique();
            $table->text('bio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('authors');
    }
};
