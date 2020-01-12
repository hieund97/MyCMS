<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Hiếu',
            'last_name' => 'Nguyễn Đức',
            'email' => 'duchieu97.hn@gmail.com',
            'password' => bcrypt('12345678'),
            'address' => 'Ha Noi',
            'phone' => '0359717468',
            'level' => '1'
        ]);

        DB::table('users')->insert([
            'first_name' => 'Phương Uyên',
            'last_name' => 'Tô Anh',
            'email' => 'toanhphuonguyen@gmail.com',
            'password' => bcrypt('12345678'),
            'address' => 'Ha Noi',
            'phone' => '0987654321',
            'level' => '1'
        ]);

        DB::table('users')->insert([
            'first_name' => 'Roger',
            'last_name' => 'Steve',
            'email' => 'captainamerica@gmail.com',
            'password' => bcrypt('12345678'),
            'address' => 'Ha Noi',
            'phone' => '098765432',
            'level' => '2'
        ]);

        DB::table('users')->insert([
            'first_name' => 'Stark',
            'last_name' => 'Tony',
            'email' => 'stark@gmail.com',
            'password' => bcrypt('12345678'),
            'address' => 'Ha Noi',
            'phone' => '098654329',
            'level' => '2'
        ]);
    }
}
