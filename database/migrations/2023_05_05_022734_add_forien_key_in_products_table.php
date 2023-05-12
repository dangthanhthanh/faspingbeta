<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->bigInteger('shop_id')->unsigned();
            $table->foreign("shop_id")->references('id')->on('shops');
            $table->bigInteger('image_id')->unsigned()->nullable();
            $table->foreign("image_id")->references('id')->on('images');
            $table->bigInteger('unit_id')->unsigned()->default(1);
            $table->foreign("unit_id")->references('id')->on('units');
            $table->bigInteger('price_id')->unsigned();
            $table->foreign("price_id")->references('id')->on('prices');
            $table->bigInteger('storage_id')->unsigned();
            $table->foreign("storage_id")->references('id')->on('storages');
        });
    }
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
