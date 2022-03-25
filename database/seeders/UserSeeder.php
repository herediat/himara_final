<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                "name" => "heredia",
                "email" => "heredia@test.com",
                "role_id" => 1,
                'profil' => 'images/users/admin.jpg',
                "password" => Hash::make("heredia"),
                "created_at" => now()
            ],
            [
                "name" => "cactus",
                "email" => "cactus@test.com",
                "role_id" => 2,
                'profil' => 'images/users/admin.jpg',
                "password" => Hash::make("cactus"),
                "created_at" => now()
            ],
            [
                "name" => "nico",
                "email" => "nico@test.com",
                "role_id" => 3,
                'profil' => 'images/users/admin.jpg',
                "password" => Hash::make("hilal"),
                "created_at" => now()
            ],
        ]);
    }
}
