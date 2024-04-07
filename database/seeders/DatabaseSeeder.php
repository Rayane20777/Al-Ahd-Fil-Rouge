<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(100)->create();
        \App\Models\Profession::factory(25)->create();
        \App\Models\Member::factory(25)->create();
        \App\Models\Secretary::factory(25)->create();
        \App\Models\Doctor::factory(25)->create();
        \App\Models\Appointment::factory(25)->create();
        \App\Models\AppointmentReservation::factory(25)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
