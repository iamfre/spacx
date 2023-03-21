<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->sentence(rand(1, 5)),
            'description' => $this->faker->realTextBetween(minNbChars: 50, maxNbChars: 250),
            'text' => $this->faker->realTextBetween(maxNbChars: 700),
            'image' => $this->faker->image(dir: 'storage/app/public/post', fullPath: false),
        ];
    }
}
