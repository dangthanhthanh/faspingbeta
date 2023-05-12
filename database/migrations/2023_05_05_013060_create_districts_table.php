<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->bigInteger("city_id")->unsigned()->index();
            $table->foreign("city_id")->references("id")->on("cities");
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};