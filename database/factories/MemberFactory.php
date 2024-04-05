<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
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
            'date_of_birth' => fake()->date(),
            'disorder' => fake()->name(),
            'description' => fake()->name(),
            'status' => "pending",
            "user_id" => User::query()->inRandomOrder()->first()?->id ?? 
            User::factory(),
        ];
    }
}
