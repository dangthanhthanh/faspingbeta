<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->bigInteger('shop_profile_id')->unsigned()->index();
            $table->foreign("shop_profile_id")->references('id')->on('shop_profiles');
            $table->bigInteger('background_id')->unsigned()->nullable();
            $table->foreign("background_id")->references('id')->on('images');
        });
    }
    public function down(): void
    {
        Schema::table('shops', function (Blueprint $table) {
            //
        });
    }
};
