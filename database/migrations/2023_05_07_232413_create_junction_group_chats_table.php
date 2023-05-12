<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('junction_group_chats', function (Blueprint $table) {
            $table->bigInteger('object_id')->unsigned()->index();//user-group,shop-group
            $table->bigInteger('group_id')->unsigned()->index();
            $table->foreign("group_id")->references('id')->on('groups');
            $table->bigInteger('chat_id')->unsigned()->index();
            $table->foreign("chat_id")->references('id')->on('chats');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('junction_group_chats');
    }
};
