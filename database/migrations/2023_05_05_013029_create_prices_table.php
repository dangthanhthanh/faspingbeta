<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("object_id")->unsigned()->index();//product or method
            $table->float("price")->default(0)->index();
            $table->float("deal_price")->nullable();
            $table->dateTime("start_deal")->nullable();
            $table->dateTime("end_deal")->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
