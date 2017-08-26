<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert(
    		[
    		'name' => 'Adriel Pinheiro',
    		'email' => 'adrielpin@gmail.com',
    		'password' => Hash::make('smile'),
    		'api_token' => str_random(100),
    		'user_type_id' => '1',
    		'created_at' => date("Y-m-d H:i:s"),
    		'updated_at' => date("Y-m-d H:i:s"),
    	]);
    }
}
