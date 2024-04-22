<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company' => fake()-> company(),
            'prefecture_id' => \App\Models\Prefecture::pluck('code')->random(),
            'postcode' => fake()-> postcode(),
            'city' => fake()->city(),
            'street_address' => fake()-> streetAddress(),
            'secondary_address' => fake()-> secondaryAddress(),
            'phone_number' => fake()-> phoneNumber(),
            'email' => fake()-> email(),
            'description' => fake()-> sentence(),
            'created_at' => fake()-> dateTime(),
            'updated_at' => fake()-> dateTime(),
        ];
    }
}
