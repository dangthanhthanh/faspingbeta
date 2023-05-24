<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("user_name");
            $table->string('email')->unique();
            $table->dateTime("email_verified_at")->nullable();
            $table->string('password');
            $table->unsignedInteger("roles")->default(0)->index();
            $table->boolean("active")->default(1);
            $table->dateTime("actived_updated_at")->nullable();
            $table->bigInteger('avatar_id')->unsigned()->nullable();
            $table->foreign("avatar_id")->references('id')->on('images');
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
