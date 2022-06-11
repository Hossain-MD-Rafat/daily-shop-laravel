<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::insert([[
            "name" => "Product title 1",
            "slug" => Str::slug("Product title 1"),
            "category_id" => 1,
            "price" => 150.20,
            "stock" => 20,
        ], [
            "name" => "Product title 2",
            "slug" => Str::slug("Product title 2"),
            "category_id" => 2,
            "price" => 399.99,
            "stock" => 15,
        ]]);
    }
}
