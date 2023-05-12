<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('junction_users_roles', function (Blueprint $table) {
            $table->bigInteger("user_id")->unsigned()->index();
            $table->foreign("user_id")->references("id")->on("users");
            $table->bigInteger("role_id")->unsigned()->index();
            $table->foreign("role_id")->references("id")->on("roles");
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('junction_users_roles');
    }
};
