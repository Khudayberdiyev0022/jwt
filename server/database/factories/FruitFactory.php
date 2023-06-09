<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class FruitFactory extends Factory
{

    public function definition()
    {
        return [
          'name' => fake()->word,
        ];
    }
}
