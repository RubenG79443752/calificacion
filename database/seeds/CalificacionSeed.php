<?php

use Illuminate\Database\Seeder;

class CalificacionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calificaciones')->insert([
        	'parcial_1'	=> 100,
            'parcial_2'	=> 70,
            'parcial_3'	=> 60,
            'practica'	=> 100,
        	'laboratorio'	=> 600,
            'ex_final'		=> 70,
            'programa_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	
        ]);
    }
}
