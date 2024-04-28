<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Profession;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'address' => fake()->address(),
           
            "profession_id" => Profession::query()->inRandomOrder()->first()?->id ?? 
            Profession::factory(),
        ];
    }
}
