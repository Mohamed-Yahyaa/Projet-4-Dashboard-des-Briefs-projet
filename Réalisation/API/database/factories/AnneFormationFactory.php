<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use \App\Models\anneFormation;

class AnneFormationFactory extends Factory
{
    
    public function definition()
    {
        return [
            "Annee_scolaire"=>$this->faker->year()."-".$this->faker->year()
        ];
    }
}
