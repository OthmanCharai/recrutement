<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
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
            'title'=>$this->faker->sentence(1),
            'description'=>$this->faker->sentence(5),
            'type'=>$this->faker->sentence(5),
            'salary'=>$this->faker->numberBetween(1,10),
            "experience"=>$this->faker->sentence(5),
            'gender'=>"male",
            'country'=>$this->faker->country(),
            'city'=>$this->faker->city(),
            'address'=>$this->faker->streetAddress(),
            'image'=>$this->faker->imageUrl(),
            'status'=>"Open",
            'deadline_date'=>now(),
            'licence_driver'=>'A',
        ];
    }
}
