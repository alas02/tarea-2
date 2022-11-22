<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre'=>$this-> faker-> name(),
            'Identidad'=>$this-> faker->unique()-> numerify('####-####-#####'),
            'Edad'=>$this-> faker-> numerify('##'),
            'Fecha_Nacimiento'=>$this-> faker-> date($format= 'Y-m-d H:m:s',$max = 'now'),
        ];
    }
}
