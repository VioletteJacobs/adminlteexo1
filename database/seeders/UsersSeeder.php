<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
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
                "name" => "admin",
                "email" => "a@a",
                "password" => Hash::make("password"),
                // "remember_token" => Str::random(10),
                "role_id" => 1
            ],
            [
                "name" => "Pauline",
                "email" => "p@p",
                "password" => Hash::make("violette"),
                // "remember_token" => Str::random(10),
                "role_id" => 2
            ],
            [
                "name" => "Elise",
                "email" => "e@e",
                "password" => Hash::make("violette"),
                // "remember_token" => Str::random(10),
                "role_id" => 2
            ],
        ]);
    }
}
