<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->bigInteger('image_id')->unsigned()->nullable();
            $table->foreign("image_id")->references("id")->on("images");
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign("category_id")->references("id")->on("categories");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
