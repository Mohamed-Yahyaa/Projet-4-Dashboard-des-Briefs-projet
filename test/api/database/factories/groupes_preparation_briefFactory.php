<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use \App\Models\groupes_preparation_brief;
use \App\Models\apprenant_preparation_brief;
use \App\Models\groupe;
class groupes_preparation_briefFactory extends Factory
{
    protected $model=groupes_preparation_brief::class;
    public function definition()
    {
        $ApprenantPreparationBrief =apprenant_preparation_brief::all()->pluck('id')->toArray();
        $groupe =groupe::all()->pluck('id')->toArray();
        return [
            "Apprenant_preparation_brief_id"=>$this->faker->randomElement($ApprenantPreparationBrief),
            "Groupe_id"=>$this->faker->randomElement($groupe),
        ];
    }
}
