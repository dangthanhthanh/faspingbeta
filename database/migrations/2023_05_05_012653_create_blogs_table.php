<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->text("description");
            $table->text("short_description");
            $table->boolean("active")->default(1);
            $table->dateTime("actived_at")->nullable();
            $table->bigInteger("object_id")->unsigned();//user,shop
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
