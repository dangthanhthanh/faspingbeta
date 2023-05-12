<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string("provider_name")->nullable();
            $table->string("provider_id")->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable()->index();
            $table->foreign("user_id")->references('id')->on('users');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
