<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$persona = new Persona();
        $persona->nombre="Manuel";
        $persona->apllido="Guangasig";
        $persona->cedula="1234567891234";
        $persona->edad=31;
        $persona->email='ejempo@gmail.com';
        $persona->save();*/

        Persona::factory()
        ->times(100)
        ->create([]);
        
        Persona::factory()
        ->times(10)
        ->create([
            'edad'=>18
        ]);
    }
}
