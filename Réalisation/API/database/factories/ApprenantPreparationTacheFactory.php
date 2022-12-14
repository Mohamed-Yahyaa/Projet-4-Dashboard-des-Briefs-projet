<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use \App\Models\ApprenantPreparationTache;
use \App\Models\apprenant;
use \App\Models\apprenant_preparation_brief;
use \App\Models\preparationTache;
class ApprenantPreparationTacheFactory extends Factory
{
    protected $model=ApprenantPreparationTache::class;
    public function definition()
    {
        $preparationTache =preparationTache::all()->pluck('id')->toArray();
        $ApprenantPreparationBrief =apprenant_preparation_brief::all()->pluck('id')->toArray();
        $apprenant =apprenant::all()->pluck('id')->toArray();

        return [
            "Preparation_tache_id"=>$this->faker->randomElement($preparationTache),
            "Apprenant_id"=>$this->faker->randomElement($apprenant),
            "Apprenant_P_Brief_id"=>$this->faker->randomElement($ApprenantPreparationBrief),
            "Etat"=>$this->faker->randomElement(['en pause', 'terminer', 'en cours']) ,
            "date_debut"=>$this->faker->date(),
            "date_fin"=>$this->faker->date(),
        ];
    }
}
