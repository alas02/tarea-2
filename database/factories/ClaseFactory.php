<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo_clase'=>$this-> faker-> numerify('abc-###'),
            'hora'=>$this-> faker-> time($format = 'H:i:s', $max = 'now'),
            'seccion'=>$this-> faker-> randomLetter,
        ];
    }
}
