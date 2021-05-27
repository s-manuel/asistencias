<?php

namespace Database\Factories;

use App\Models\Capacitacion;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

use function Ramsey\Uuid\v1;

class CapacitacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Capacitacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $personas = Persona::select('id')->get();

        return [
            'persona_id'=>$this->faker->randomElement($personas)->id,
            'fecha'=>$this->faker->date,
            'nombre'=>$this->faker->name,
            'horas'=>rand(10,50),   
            'lugar'=>$this->faker->city,
            'institucion'=>$this->faker->company,
        ];
    }
}
