<?php

namespace Tests\Feature;

use App\Models\AsistenciaPersonal;
use App\Models\Persona;
use Database\Seeders\PersonaSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PersonaTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_seeder()
    {
        // Mando  correr el seeder
        $response = $this->seed(PersonaSeeder::class);

        //Cuento el numero de peronas de l bd
        $personas = Persona::count();

        $this->assertEquals($personas, 110);
    }

    public function test_asistencias_personas(){
        $persona = Persona::factory()->create([]);
        // Creo dos asistencias con el factory de asistencia
        AsistenciaPersonal::factory()->times(2)->create([
            'persona_id'=>$persona->id
        ]);

        $personas = $persona->asistencias->count();
        // verificoc si se crearon 2 asistencias
        $this->assertEquals($personas, 2);    
    }
}
