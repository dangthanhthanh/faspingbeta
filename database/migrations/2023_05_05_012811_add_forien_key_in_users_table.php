<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('profile_id')->unsigned();
            $table->foreign("profile_id")->references('id')->on('profiles');
            $table->bigInteger('shop_id')->unsigned()->nullable();
            $table->foreign("shop_id")->references('id')->on('shops');
        });
    }
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
