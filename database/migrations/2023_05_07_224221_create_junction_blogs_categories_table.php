<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('junction_blogs_categories', function (Blueprint $table) {
            $table->bigInteger("blog_id")->unsigned()->index();
            $table->foreign("blog_id")->references("id")->on("blogs");
            $table->bigInteger("category_id")->unsigned()->index();
            $table->foreign("category_id")->references("id")->on("categories");
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('junction_blogs_categories');
    }
};
