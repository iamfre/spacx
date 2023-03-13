<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),
            'detail' => json_encode([
                'color' => 'white',
                'seats' => 4,
            ]),
            'image' => 'no_image.png',
            'price' => rand(100000, 9999999),
            'old_price' => null,
        ];
    }
}
