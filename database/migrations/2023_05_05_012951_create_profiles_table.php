<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->date("birth_date")->nullable();
            $table->string("phone_number")->nullable();
            $table->bigInteger("shopping_point")->default(0);
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign("user_id")->references('id')->on('users');
            $table->bigInteger('shop_id')->unsigned()->nullable()->index();
            $table->foreign("shop_id")->references('id')->on('shops');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
