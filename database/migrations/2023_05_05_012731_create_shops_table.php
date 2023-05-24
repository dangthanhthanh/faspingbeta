<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("short_decription")->nullable();
            $table->boolean("active")->default(0);
            $table->dateTime("actived_updated_at")->nullable();
            $table->unsignedBigInteger("product_sale")->default(0);
            $table->unsignedBigInteger("number_product")->default(0);
            $table->bigInteger('shop_profile_id')->unsigned()->index();
            $table->foreign("shop_profile_id")->references('id')->on('shop_profiles');
            $table->bigInteger('background_id')->unsigned()->nullable();
            $table->foreign("background_id")->references('id')->on('images');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign("category_id")->references('id')->on('categories');;
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
