<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
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
            'name'=>$this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'category'=>$this->faker->sentence(1),
            'birthday'=>now(),
            'Country'=>$this->faker->country(),
            'city'=>$this->faker->city(),
            'phone'=>$this->faker->phoneNumber(),
            'description'=>$this->faker->sentence(4),
            'address'=>$this->faker->streetAddress(),
            'image'=>$this->faker->imageUrl(),
            'user_id'=>1
        ];
    }
}
