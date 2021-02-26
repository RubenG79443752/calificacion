<?php

use Illuminate\Database\Seeder;

class ProgramaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programaciones')->insert([
        	'gestion'	=> '2021',
        	'grupo'	=> 1,
        	'asignatura_id'	=> 1,
            'estudiante_id'		=> 1,
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	
        ]);
    }
}
