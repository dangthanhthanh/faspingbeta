<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->unsignedFloat('price')->default(0);// gia san pham vao luc dat hang
            $table->unsignedFloat('quantity')->default(0);// quantity pham vao luc dat hang
            $table->bigInteger('product_id')->unsigned()->nullable()->index();
            $table->foreign("product_id")->references('id')->on('products');
            $table->bigInteger('order_list_id')->unsigned()->nullable()->index();
            $table->foreign("order_list_id")->references('id')->on('order_lists');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
