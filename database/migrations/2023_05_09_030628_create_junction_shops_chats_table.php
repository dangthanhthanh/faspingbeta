<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('junction_shops_chats', function (Blueprint $table) {
            $table->bigInteger('shop_id')->unsigned()->index();
            $table->foreign("shop_id")->references('id')->on('shops');
            $table->bigInteger('object_id')->unsigned()->index();//user,shop,group
            $table->bigInteger('chat_id')->unsigned()->index();
            $table->foreign("chat_id")->references('id')->on('chats');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('junction_shops_chats');
    }
};
