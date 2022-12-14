<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use \App\Models\apprenant_preparation_brief;
use \App\Models\preparationBrief;
use \App\Models\apprenant;

class apprenant_preparation_briefFactory extends Factory
{


            protected $model=apprenant_preparation_brief::class;
            public function definition()
            {
                $preparationBrief =preparationBrief::all()->pluck('id')->toArray();
                $apprenant =apprenant::all()->pluck('id')->toArray();
                return [
                    "Date_affectation"=>$this->faker->date(),
                    "Preparation_brief_id"=>$this->faker->randomElement($preparationBrief),
                    "Apprenant_id"=>$this->faker->randomElement($apprenant),
                ];
            }
 }
