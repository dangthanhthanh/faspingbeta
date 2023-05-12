<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('junction_users_chats', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign("user_id")->references('id')->on('users');
            $table->bigInteger('chat_id')->unsigned()->index();
            $table->foreign("chat_id")->references('id')->on('chats');
            $table->bigInteger('object_id')->unsigned()->index();//user-user,shop-user
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('junction_users_chats');
    }
};
