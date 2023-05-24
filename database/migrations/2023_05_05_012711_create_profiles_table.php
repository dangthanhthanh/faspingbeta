<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->date("birth_date")->nullable();
            $table->string("phone_number")->nullable();
            $table->bigInteger('address_id')->unsigned()->nullable()->index();
            $table->foreign("address_id")->references('id')->on('addresses');
            $table->bigInteger("shopping_point")->default(0);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
