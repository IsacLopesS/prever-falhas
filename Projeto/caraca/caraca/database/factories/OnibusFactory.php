<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Onibus>
 */
class OnibusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'placa'=>$this->faker->swiftBicNumber(),
            'num_assentos_disp'=> 43,
            'num_T_assentos'=> 43


        ];
    }
}
