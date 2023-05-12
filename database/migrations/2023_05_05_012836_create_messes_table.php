<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('messes', function (Blueprint $table) {
            $table->id();
            $table->text("content")->nullable();
            $table->dateTime("datetime")->nullable();
            $table->bigInteger('sender_id')->unsigned()->index();//user,shop
            $table->bigInteger('chat_id')->unsigned()->index();
            $table->foreign("chat_id")->references("id")->on("chats");
            $table->boolean("status")->default(1);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('messes');
    }
};
