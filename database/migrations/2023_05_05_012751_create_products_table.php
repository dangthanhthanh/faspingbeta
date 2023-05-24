<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("decription")->nullable();
            $table->text("short_decription")->nullable();
            $table->boolean("active")->default(0);
            $table->dateTime("actived_updated_at")->nullable();
            $table->bigInteger('sale')->unsigned()->default(0);
            $table->bigInteger('storage')->unsigned()->default(0);
            $table->unsignedFloat('price');
            $table->unsignedFloat('discount_price')->nullable();
            $table->bigInteger('shop_id')->unsigned()->index();
            $table->foreign("shop_id")->references('id')->on('shops');
            $table->bigInteger('image_id')->unsigned()->nullable();
            $table->foreign("image_id")->references('id')->on('images');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign("category_id")->references('id')->on('categories');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
