<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cart_itemts', function (Blueprint $table) {
            $table->float("quantity")->default(1);
            $table->bigInteger('product_id')->unsigned()->index();
            $table->foreign("product_id")->references('id')->on('products');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign("user_id")->references('id')->on('users');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('cart_itemts');
    }
};
