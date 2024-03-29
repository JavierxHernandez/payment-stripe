<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'image' => 'services/' . $this->faker->image('public/storage/services', 640, 680, null, false),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement([19, 49, 99]),
        ];
    }
}
