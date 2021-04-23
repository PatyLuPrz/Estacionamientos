<?php

namespace Database\Factories;

use App\Models\Corte;
use Illuminate\Database\Eloquent\Factories\Factory;

class CorteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Corte::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha'=>$this->faker->date(),
            'fechaAnterior'=>$this->faker->date(),
            'totalCorte'=>$this->faker->randomDigit(),
            'totalHrsCobradas'=>$this->faker->randomElement(['9 Hrs. 31 Min.','6 Hrs. 43 Min.','1 Hrs. 0 Min.','4 Hrs. 24 Min.']),
            'totalReg'=>$this->faker->randomDigit()
            
        ];
    }
}
