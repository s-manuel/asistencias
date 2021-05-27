<?php

namespace Database\Seeders;

use App\Models\AsistenciaPersonal;
use Illuminate\Database\Seeder;

class AsistenciaPersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AsistenciaPersonal::factory(10)->create();
    }
}
