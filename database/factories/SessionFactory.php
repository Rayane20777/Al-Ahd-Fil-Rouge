<?php

namespace Database\Factories;

use App\Models\ParamedicalService;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Session>
 */
class SessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date(),
            'departure_hour' => fake()->time(),
            'ending_hour' => fake()->time(),
            "paramedical_service_id" => ParamedicalService::query()->inRandomOrder()->first()?->id ?? 
            ParamedicalService::factory(),
            "doctor_id" => Doctor::query()->inRandomOrder()->first()?->id ?? 
            Doctor::factory(),
            ];
    }
}
