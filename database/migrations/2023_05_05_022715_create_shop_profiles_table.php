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
            $table->string("phone_number")->nullable();
            $table->integer("number_product")->default(0);
            $table->integer("number_product_sale")->default(0);
            $table->string("time_reps")->nullable()->index();
            $table->dateTime("online_last_time")->nullable();
            $table->bigInteger("sale")->default(0);
            $table->bigInteger('shop_id')->unsigned()->index();
            $table->foreign("shop_id")->references('id')->on('shops');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('shop_profiles');
    }
};
