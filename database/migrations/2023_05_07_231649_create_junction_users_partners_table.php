<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('junction_users_partners', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign("user_id")->references('id')->on('users');
            $table->bigInteger('object_id')->unsigned()->index();//user,shop,group
            $table->bigInteger('status_id')->unsigned()->index();
            $table->foreign("status_id")->references('id')->on('status_partners');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('junction_users_partners');
    }
};
