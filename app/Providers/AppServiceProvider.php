<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\ProfessionRepositoryInterface;
use App\Repositories\Interfaces\EventRepositoryInterface;
use App\Repositories\Interfaces\AppointmentRepositoryInterface;
use App\Repositories\Interfaces\ParamedicalServiceRepositoryInterface;
use App\Repositories\ProfessionRepository;
use App\Repositories\EventRepository;
use App\Repositories\AppointmentRepository;
use App\Repositories\ParamedicalServiceRepository;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProfessionRepositoryInterface::class, ProfessionRepository::class);   
        $this->app->bind(EventRepositoryInterface::class, EventRepository::class);   
        $this->app->bind(AppointmentRepositoryInterface::class, AppointmentRepository::class);   
        $this->app->bind(ParamedicalServiceRepositoryInterface::class, ParamedicalServiceRepository::class);   
     }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define("admin", fn(User $user) => $user->hasRole('admin'));
        Gate::define("doctor", fn(User $user) => $user->hasRole('doctor'));
        Gate::define("member", fn(User $user) => $user->hasRole('admin'));
        Gate::define("secretary", fn(User $user) => $user->hasRole('admin'));

    }

    
}
