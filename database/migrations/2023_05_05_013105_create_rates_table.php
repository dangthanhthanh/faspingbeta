<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->float("point")->default(5);
            $table->text("content")->nullable();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign("user_id")->references('id')->on('users');
            $table->bigInteger("object_id")->unsigned()->index();//donhang,product,blog,shop
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('rates');
    }
};
