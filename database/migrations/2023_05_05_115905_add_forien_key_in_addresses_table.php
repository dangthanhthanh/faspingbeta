<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->bigInteger('city_id')->unsigned()->index();
            $table->foreign("city_id")->references('id')->on('cities');
            $table->bigInteger('dictrict_id')->unsigned()->nullable();
            $table->foreign("dictrict_id")->references('id')->on('districts');
        });
    }
    public function down(): void
    {
        Schema::table('addresses', function (Blueprint $table) {
            //
        });
    }
};
