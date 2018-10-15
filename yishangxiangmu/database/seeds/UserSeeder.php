<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
    	for ($i=0; $i < 50; $i++) { 
    		# code...
    	
        DB::table('users')->insert([
           'username' => str_random(10),
           'password' => Hash::make(12345678),
           'email' => str_random(10).'@qq.com',
           'phone' => "13845784962",
           'profile' => '/upload/15378834756927.jpg',
           'status' =>'1'
        ]);

       }
    }
}


