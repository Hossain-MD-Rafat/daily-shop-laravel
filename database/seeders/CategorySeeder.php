<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::insert(
            [
                [
                    "name" => Str::random(15),
                ],
                [
                    "name" => Str::random(15),
                ],
                [
                    "name" => Str::random(15),
                ]
            ]
        );
    }
}
