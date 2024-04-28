<?php

namespace Database\Factories;
use App\Models\Member;
use App\Models\Session;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ParamedicalSessionReservation>
 */
class ParamedicalSessionReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "status"=> 'pending',
            "member_id" => Member::query()->inRandomOrder()->first()?->id ?? 
            Member::factory(),
            "session_id" => Session::query()->inRandomOrder()->first()?->id ?? 
            Session::factory(),
        ];
    }
}
