<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('junction_shop_partners', function (Blueprint $table) {
            $table->bigInteger('shop_id')->unsigned()->index();
            $table->foreign("shop_id")->references('id')->on('shops');
            $table->bigInteger('object_id')->unsigned();//user,shop,group
            $table->bigInteger('status_id')->unsigned()->index();
            $table->foreign("status_id")->references('id')->on('status_partners');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('junction_shop_partners');
    }
};
