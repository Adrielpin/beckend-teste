<?php

use Illuminate\Database\Seeder;

class userTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('user_types')->insert(
    		['name' => 'proprietario',
    		'created_at' => date("Y-m-d H:i:s"),
    		'updated_at' => date("Y-m-d H:i:s")],

    		['name' => 'Diretor',
    		'created_at' => date("Y-m-d H:i:s"),
    		'updated_at' => date("Y-m-d H:i:s")],

    		['name' => 'Coordenador',
    		'created_at' => date("Y-m-d H:i:s"),
    		'updated_at' => date("Y-m-d H:i:s")],

    		['name' => 'professor',
    		'created_at' => date("Y-m-d H:i:s"),
    		'updated_at' => date("Y-m-d H:i:s")],

    		['name' => 'responsavel',
    		'created_at' => date("Y-m-d H:i:s"),
    		'updated_at' => date("Y-m-d H:i:s")]
    	);
    }
}
