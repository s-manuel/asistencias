<?php

namespace Database\Seeders;

use App\Models\Habilidad;
use Illuminate\Database\Seeder;

class HabilidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$habilidades = new Habilidad();
        $habilidades->nombre="Cantar";
        $habilidades->porcentaje=10;
        $habilidades->orden="sn";
        $habilidades->persona_id=1;*/

        Habilidad::factory(10)->create();
    }
}
