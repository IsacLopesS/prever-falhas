<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Item;
use App\Models\Entidade;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coleta>
 */
class ColetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'item_id'=>Item::factory(),
            'entidade_id'=>Entidade::factory(),
            'quantidade'=>'15.45',
            'data' => $this->faker->date
            
        ];
    }
}
