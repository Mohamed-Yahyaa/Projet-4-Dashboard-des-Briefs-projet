<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\formateur;


class FormateurFactory extends Factory
{

    protected $model=formateur::class;
    public function definition()
    {
        return [

            "Nom_formateur"=>$this->faker->firstName(),
            "Prenom_formateur"=>$this->faker->lastName(),
            "Email_formateur"=>$this->faker->email(),
            "Phone"=>$this->faker->phoneNumber(),
            "Adress"=>$this->faker->address (),
            "CIN"=>$this->faker->secondaryAddress(),
            "Image"=>$this->faker->imageUrl(true, 'Faker',true),




        ];
    }
}
