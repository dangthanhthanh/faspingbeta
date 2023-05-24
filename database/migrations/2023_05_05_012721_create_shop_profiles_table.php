<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shop_profiles', function (Blueprint $table) {
            $table->id();
            $table->string("phone_number");
            $table->unsignedBigInteger("time_reps")->nullable();
            $table->time("online_last_time")->nullable();
            $table->unsignedBigInteger('address_id')->unsigned();
            $table->foreign("address_id")->references('id')->on('addresses');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('shop_profiles');
    }
};
