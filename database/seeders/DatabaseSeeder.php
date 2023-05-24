<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // \App\Models\Image::factory(100)->create();
        // \App\Models\Video::factory(100)->create();
        // \App\Models\Category::factory(10)->create();
        \App\Models\Category::factory(100)->create();
        // \App\Models\City::factory(100)->create();
        // \App\Models\District::factory(100)->create();
        // \App\Models\Address::factory(100)->create();
        // \App\Models\Provider::factory(100)->create();
        // \App\Models\Profile::factory(100)->create();
        // \App\Models\ShopProfile::factory(100)->create();
        \App\Models\Shop::factory(20)->create();
        \App\Models\User::factory(20)->create();
        \App\Models\Product::factory(200)->create();
        \App\Models\OrderList::factory(100)->create();
        \App\Models\Order::factory(500)->create();
        \App\Models\CartItem::factory(20)->create();
        \App\Models\Blog::factory(100)->create();
        \App\Models\Notification::factory(100)->create();
    }
}
