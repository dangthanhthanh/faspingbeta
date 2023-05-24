<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->text("title");
            $table->text("description");
            $table->text("short_description");
            $table->boolean("active")->default(0);
            $table->dateTime("actived_updated_at")->nullable();
            $table->bigInteger('image_id')->unsigned()->nullable();
            $table->foreign("image_id")->references('id')->on('images');
            $table->bigInteger('video_id')->unsigned()->nullable();
            $table->foreign("video_id")->references('id')->on('videos');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign("user_id")->references('id')->on('users');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign("category_id")->references('id')->on('categories');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
