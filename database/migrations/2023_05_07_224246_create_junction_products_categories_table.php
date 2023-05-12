<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('junction_products_categories', function (Blueprint $table) {
            $table->bigInteger("product_id")->unsigned()->index();
            $table->foreign("product_id")->references("id")->on("products");
            $table->bigInteger("category_id")->unsigned()->index();
            $table->foreign("category_id")->references("id")->on("categories");
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('junction_products_categories');
    }
};
