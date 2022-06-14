<?php

namespace Database\Factories;
use App\Models\Auteur;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AuteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->firstname(),
            'prenom' => $this->faker->lastName(),
           
        ];
    }
   

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
