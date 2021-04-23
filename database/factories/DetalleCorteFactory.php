<?php

namespace Database\Factories;

use App\Models\DetalleCorte;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetalleCorteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DetalleCorte::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_corte'=>$this->faker->randomElement(['1','2','3','4','5','6','7','8','9']),
            'id_registro'=>$this->faker->randomElement(['1','2','3','4','5','6','7','8','9']),
            'numreg'=>$this->faker->randomDigit(),
        ];
    }
}
