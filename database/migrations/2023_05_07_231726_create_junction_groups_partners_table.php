<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('junction_groups_partners', function (Blueprint $table) {
            $table->bigInteger('group_id')->unsigned()->nullable();
            $table->foreign("group_id")->references('id')->on('groups');
            $table->bigInteger('object_id')->unsigned();//user,shop
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('junction_groups_partners');
    }
};
