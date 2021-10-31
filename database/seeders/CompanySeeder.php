<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'KFC',
            'email' => 'kfc@gmail.com',
            'telephone' => '0775874587',
            'logo_path' => 'C:\xampp\htdocs\we_are_designers_project\storage\application\public\pngegg.png',
            'photo_path' => 'C:\xampp\htdocs\we_are_designers_project\storage\application\public\download.jpg',
            'website' => 'ww.kfc.com',
            'address' => 'Colombo 01'
        ]);
    }
}
