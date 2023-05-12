<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->bigInteger('image_id')->unsigned()->nullable();
            $table->foreign("image_id")->references('id')->on('images');
            $table->bigInteger('video_id')->unsigned()->nullable();
            $table->foreign("video_id")->references('id')->on('videos');
        });
    }
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            //
        });
    }
};
