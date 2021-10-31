<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'first_name' => 'Kamal',
            'last_name' => 'Perera',
            'company' => 'kfc',
            'email' => 'kamal@gmail.com',
            'phone' => '0758945621',
            'profile_photo' => 'C:\xampp\htdocs\we_are_designers_project\storage\application\public\img2.png',
        ]);
    }
}
