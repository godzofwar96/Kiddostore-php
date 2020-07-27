<?php

use Illuminate\Database\Seeder;

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
        	'name' => 'Nguyễn Hồng Phi',
        	'email' => 'kiddostore@gmail.com',
        	'password' => Hash::make('kiddostore'),
        	'role' => 1
        ]); 
    }
}
