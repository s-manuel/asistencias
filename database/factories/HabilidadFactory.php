<?php

namespace Database\Factories;

use App\Models\Habilidad;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class HabilidadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Habilidad::class;

    /**
     * Define the model's default state.
     *            //'porcentaje'=>$this->faker->randomNumber(1, 100),

     * @return array
     */
    public function definition()
    {
        $personas = Persona::select('id')->get();

        return [
            'nombre'=>$this->faker->name,
            'porcentaje'=>rand(18,70),
            'orden'=>$this->faker->word,
            'persona_id'=>$this->faker->randomElement($personas)->id,
        ];
    }
}
