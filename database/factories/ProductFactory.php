<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->company,
            'category' => $this->faker->company,
            'brand' => $this->faker->company,
            'group' => $this->faker->company,
            'price' => $this->faker->numberBetween($min = 200, $max = 9000),
            'stock' => $this->faker->numberBetween($min = 0, $max = 100),
        ];
    }
}
