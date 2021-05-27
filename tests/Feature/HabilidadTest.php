<?php

namespace Tests\Feature;

use App\Models\Habilidad;
use Database\Seeders\HabilidadSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HabilidadTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
   

        public function test_seeder()
        {
            // Mando  correr el seeder
            $response = $this->seed(HabilidadSeeder::class);
    
            //Cuento el numero de peronas de l bd
            $personas = Habilidad::count();
    
            $this->assertEquals($personas, 10);
        }    
}
