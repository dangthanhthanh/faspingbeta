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
            $table->boolean("active")->default(1);
            $table->string("product_link");
            $table->bigInteger('sale')->unsigned()->default(0);//danger khi click mua hang thi doanh thu cong 1/truc trac trar hang doanh thu -1 doanh thu phai >=0
            $table->softDeletes()->index();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
