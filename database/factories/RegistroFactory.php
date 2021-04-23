<?php

namespace Database\Factories;

use App\Models\Registro;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fechaentrada'=>$this->faker->date(),
            'fechasalida'=>$this->faker->date(),
            'tiempo'=>$this->faker->randomElement(['9 Hrs. 31 Min.','6 Hrs. 43 Min.','1 Hrs. 0 Min.','4 Hrs. 24 Min.']),
            'placas'=>$this->faker->randomElement(['1','0']),
            'dejoLLave'=>$this->faker->randomElement(['1','0']),
            'cancelado'=>$this->faker->randomElement(['1','0']),
            'salida'=>$this->faker->randomElement(['1','0']),
            'hrsCobradas'=>$this->faker->randomDigit(),
            'perdioTicket'=>$this->faker->randomElement(['1','0']),
            'sinronizado'=>$this->faker->randomElement(['1','0']),
            'pagado'=>$this->faker->randomElement(['1','0']),
            'totalPagado'=>$this->faker->randomNumber(),
            'iva'=>$this->faker->randomNumber(),
            'noNoches'=>$this->faker->randomDigit(),
        ];
    }
}
