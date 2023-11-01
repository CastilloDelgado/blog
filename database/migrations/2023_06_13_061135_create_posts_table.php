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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image_url');
            $table->unsignedBigInteger('user_id');
            $table->string('slug');
            $table->string('excerpt');
            $table->longText('body');
            $table->timestamp('published_at')->nullable;
            $table->timestamps();
            // $table->string('location');
            // $table->string('address');
            // $table->string('country');
            // $table->string('state');
            // $table->string('city');
            // $table->timestamp('concert_date');
            // $table->string('band');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
