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
    public function definition(): array
    {
        return [
            "title" => fake()->jobTitle,
            "salary"=> fake()->randomElement(['$40,000 usd' ,'$50,000 usd', '$60,000 usd','$70,000 usd', '$80,000 usd', '$90,000 usd' ]),
            "locatin" =>'remote',
            "schedule" => 'full time',
            "url" => fake()->url,
            'featured' => false
        ];
    }
}
