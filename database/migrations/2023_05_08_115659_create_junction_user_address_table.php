<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('junction_user_address', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign("user_id")->references('id')->on('users');
            $table->bigInteger('address_id')->unsigned();
            $table->foreign("address_id")->references('id')->on('addresses');
            $table->boolean("status")->default(1);//
            // 1 shop chi co 1 address
            // 1 storage chi co 1 address
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('junction_user_address');
    }
};
