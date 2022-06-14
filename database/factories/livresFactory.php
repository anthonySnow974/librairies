<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class livresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [ 
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'extrait' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'titre' => $this->faker->streetSuffix() ,
            
            
            //
        ];
    }
}
