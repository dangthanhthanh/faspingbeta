<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('short_decription')->nullable();
            $table->bigInteger('chat_id')->unsigned()->index();
            $table->foreign("chat_id")->references('id')->on('chats');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
