<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $horror = ["scary", "very scary", "nightmare", "ghost"];
        return [
            "name" => $this->faker->name(),
            "description" => $this->faker->paragraph(),
            "rate" => $this->faker->randomElement([3.5, 4, 4.5, 4.8, 4.9, 5, 3.9]),
            "allowed_type" => $this->faker->randomElement(["basic", "premium"]),
            "horror" => $this->faker->randomElement($horror),
            "photo" => "halween",
        ];
    }
}
