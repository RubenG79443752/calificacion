<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EstudianteSeed::class);
        $this->call(AsignaturaSeed::class);
        $this->call(ProgramaSeed::class);
        $this->call(CalificacionSeed::class);
    }
}
