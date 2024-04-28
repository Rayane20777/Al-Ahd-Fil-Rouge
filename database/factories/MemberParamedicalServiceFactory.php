<?php

namespace Database\Factories;

use App\Models\ParamedicalService;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MemberParamedicalService>
 */
class MemberParamedicalServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "member_id" => Member::query()->inRandomOrder()->first()?->id ?? 
            Member::factory(),
            "paramedical_service_id" => ParamedicalService::query()->inRandomOrder()->first()?->id ?? 
            ParamedicalService::factory(),
        ];
    }
}
