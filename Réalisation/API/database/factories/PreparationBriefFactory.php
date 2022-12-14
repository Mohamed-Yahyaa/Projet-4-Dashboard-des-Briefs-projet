<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use \App\Models\preparationBrief;
use \App\Models\formateur;

class PreparationBriefFactory extends Factory
{

    protected $model=preparationBrief::class;
    public function definition()
    {
        $formateur =formateur::all()->pluck('id')->toArray();
        return [
            "Nom_du_brief"=>$this->faker->name(),
            "Description"=>$this->faker->word() ,
            "Duree"=>$this->faker->randomNumber(1),
            "Formateur_id"=>$this->faker->randomElement($formateur),
        ];
    }
}
