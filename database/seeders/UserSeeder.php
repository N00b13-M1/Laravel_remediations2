<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "Batou",
            "email" => "batou@gmail.com",
            "password" => bcrypt("molengeek"),
        ]);
        DB::table('users')->insert([
            "name" => "Michael",
            "email" => "michael@gmail.com",
            "password" => bcrypt("molengeek"),
        ]);
    }
}
