<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('methods', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('value')->nullable();
            $table->bigInteger('quantity')->default(0);//so luong san pham con lai
            $table->bigInteger('product_id')->unsigned()->index();
            $table->foreign("product_id")->references('id')->on('products');
            $table->bigInteger('price_id')->unsigned();
            $table->foreign("price_id")->references('id')->on('prices');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('methods');
    }
};
