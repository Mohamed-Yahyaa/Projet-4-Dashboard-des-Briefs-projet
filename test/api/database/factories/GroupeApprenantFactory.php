<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\groupe;
use \App\Models\apprenant;
use \App\Models\GroupeApprenant;

class GroupeApprenantFactory extends Factory
{

    protected $model=GroupeApprenant::class;
    public function definition()
    {
        $apprenant =apprenant::all()->pluck('id')->toArray();


        $groupe =groupe::all()->pluck('id')->toArray();

        return [
            "Groupe_id"=>$this->faker->randomElement($groupe),
           "Apprenant_id"=>$this->faker->randomElement($apprenant),
        ];
    }
}
