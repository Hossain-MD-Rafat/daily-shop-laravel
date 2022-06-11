<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert([[
            'username' => Str::random(10),
            'email' => 'test1@mail.com',
            'firstname' => Str::random(6),
            'lastname' => Str::random(6),
            'password' => bcrypt('123456'),
            'address' => 'West Shewrapara',
        ], [
            'username' => Str::random(10),
            'email' => 'test2@mail.com',
            'firstname' => Str::random(6),
            'lastname' => Str::random(6),
            'password' => bcrypt('123456'),
            'address' => 'Middle Badda',
        ]]);
    }
}
