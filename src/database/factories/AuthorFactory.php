<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = $this->faker->randomElement(["Male", "Female"]);
        $birthday = $this->faker->date;
        return [
            "first_name" => $this->faker->firstName($gender),
            "last_name" => $this->faker->lastName($gender),
            "birthday" => $birthday,
            "gender" =>  $gender,
            "avatar" => $this->faker->imageUrl("400", "400", "avatar")
        ];
    }
}
