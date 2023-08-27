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
        // Faker image broken. Load images - public/post/image (1).png
        $num = rand(1,100);
        $randomImage = "post ($num).png";

        return [
            'title' => $this->faker->unique()->sentence(rand(1, 5)),
            'description' => $this->faker->realTextBetween(minNbChars: 50, maxNbChars: 250),
            'text' => $this->faker->realTextBetween(maxNbChars: 700),
            'image' => $randomImage,
        ];
    }
}
