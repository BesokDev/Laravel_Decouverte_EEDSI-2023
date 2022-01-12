<?php

namespace Database\Factories;

use App\Models\Cocktail;
use App\Models\Plat;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var Plat $model
     */
    protected $model = Plat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'content' => $this->faker->paragraph,
            'cocktail_id' => Cocktail::factory(),
            'created_at' => now()
        ];

        /*
         * Au lieu d'utiliser le SEEDING, on va utiliser 'tinker' en command line.
         *      tinker est un 'bac à sable' pout écrire du code PHP.
         *      On lance la commande avec : php artisan tinker
         *
         *      Ensuite on lance l'instruction php Plat::factory()->count(5)->create()
         *      => cela créera 5 nouvelles entrées en BDD
        */
    }
}
