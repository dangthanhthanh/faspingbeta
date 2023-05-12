<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('storages', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->bigInteger('address_id')->unsigned()->index();
            $table->foreign("address_id")->references('id')->on('addresses');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('storages');
    }
};
