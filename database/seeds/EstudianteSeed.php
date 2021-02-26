<?php

use Illuminate\Database\Seeder;

class EstudianteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estudiantes')->insert([
        	'nombres'	=> 'Juancito',
        	'paterno'	=> 'Pinto',
        	'materno'	=> 'Sanchez',
            'ru'		=> '70558',
        	'email'	=> 'juancito@gmail.com',
            'ci'    => '8523640',
        	'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
