<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@wearedesigners.net',
            'email_verified_at' => '2021-10-27',
            'password' => Hash::make('654321'),
            'role' => 'admin',
            'created_at' => '2021-10-27',
            'updated_at' => '2021-10-27'
        ]);
    }
}
