<?php

use Illuminate\Database\Seeder;

class AsignaturaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignaturas')->insert([
        	'nombre'	=> 'fisica 1',
        	'sigla'	=> 'fis100',
        	'horas'	=> 600,
            'semestre'		=> 1,
        	'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        ]);
    
    }
}
