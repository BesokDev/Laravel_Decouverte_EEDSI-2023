<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CocktailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Bourbon Sour',
            'ingredients' => 'Du whisky et du jus de citron vert',
            'price' => '10 €'
        ];
    }
}
