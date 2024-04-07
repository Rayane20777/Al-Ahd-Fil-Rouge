<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppointmentReservation>
 */
class AppointmentReservationFactory extends Factory
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
            "appointment_id" => Appointment::query()->inRandomOrder()->first()?->id ?? 
            Appointment::factory(),
        ];
    }
}
