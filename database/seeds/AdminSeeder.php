<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
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
            'password' => bcrypt('123456'),
            'address' => 'Ha Noi',
            'phone' => '0123456789',
            'level' => '1'
        ]);
    }
}
