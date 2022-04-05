<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidate>
 */
class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            "first_name"=>$this->faker->name(),
            'last_name'=>$this->faker->name(),
            'driver_licence'=>$this->faker->sentence(2),
            'birthday'=>now(),
            'city'=>$this->faker->city(),
            'country'=>$this->faker->country(),
            'phone'=>$this->faker->phoneNumber(),
            'description'=>$this->faker->sentence(4),
            'address'=>$this->faker->streetAddress(),
            'image'=>$this->faker->imageUrl(),
            "language"=>"polonais",
            'type'=>"Driver",
            'experience'=>"1-5 YEARS",
            'education_levels'=>"Master",
            'user_id'=>1,
        ];
    }
}
