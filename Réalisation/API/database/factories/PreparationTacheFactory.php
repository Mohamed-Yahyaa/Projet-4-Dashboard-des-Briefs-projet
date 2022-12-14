<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use \App\Models\preparationTache;
use \App\Models\preparationBrief;

class PreparationTacheFactory extends Factory
{
    protected $model=preparationTache::class;
    public function definition()
    {
        $preparationBrief =preparationBrief::all()->pluck('id')->toArray();
        return [
            "Nom_tache"=>$this->faker->name(),
            "Description"=>$this->faker->word(),
            "Duree"=>$this->faker->randomNumber(1),
            "Preparation_brief_id"=>$this->faker->randomElement($preparationBrief),
        ];
    }
}
