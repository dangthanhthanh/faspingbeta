<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('object_id')->unsigned()->index();//comment,product,blog
            $table->text("content")->nullable();
            $table->dateTime("time")->nullable();
            $table->bigInteger('comment_id')->unsigned()->index();
            $table->foreign("comment_id")->references('id')->on('comments');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign("user_id")->references('id')->on('users');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
