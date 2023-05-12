<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_lists', function (Blueprint $table) {
            $table->id();
            $table->text('decription')->nullable();
            $table->bigInteger('status_id')->unsigned()->nullable()->index();
            $table->foreign("status_id")->references('id')->on('status_orders');
            $table->bigInteger('user_id')->unsigned()->nullable()->index();
            $table->foreign("user_id")->references('id')->on('users');
            $table->bigInteger('address_id')->unsigned()->nullable()->index();
            $table->foreign("address_id")->references('id')->on('addresses');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('order_lists');
    }
};
