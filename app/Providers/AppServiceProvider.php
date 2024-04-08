<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\ProfessionRepositoryInterface;
use App\Services\Interfaces\ProfessionServiceInterface;
use App\Repositories\Interfaces\EventRepositoryInterface;
use App\Services\Interfaces\EventServiceInterface;
use App\Repositories\Interfaces\AppointmentRepositoryInterface;
use App\Services\Interfaces\AppointmentServiceInterface;
use App\Services\Interfaces\SessionServiceInterface;
use App\Repositories\Interfaces\SessionRepositoryInterface;
use App\Repositories\Interfaces\ParamedicalServiceRepositoryInterface;
use App\Services\Interfaces\ParamedicalServiceServiceInterface;
use App\Repositories\ProfessionRepository;
use App\Services\ProfessionService;
use App\Repositories\EventRepository;
use App\Services\EventService;
use App\Repositories\AppointmentRepository;
use App\Services\AppointmentService;
use App\Services\SessionService;
use App\Repositories\SessionRepository;
use App\Repositories\ParamedicalServiceRepository;
use App\Services\ParamedicalServiceService;
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
        $this->app->bind(ProfessionServiceInterface::class, ProfessionService::class);   
        $this->app->bind(SessionServiceInterface::class, SessionService::class);   
        $this->app->bind(SessionRepositoryInterface::class, SessionRepository::class);   
        $this->app->bind(EventRepositoryInterface::class, EventRepository::class);   
        $this->app->bind(EventServiceInterface::class, EventService::class);   
        $this->app->bind(AppointmentRepositoryInterface::class, AppointmentRepository::class);   
        $this->app->bind(AppointmentServiceInterface::class, AppointmentService::class);   
        $this->app->bind(ParamedicalServiceRepositoryInterface::class, ParamedicalServiceRepository::class);
        $this->app->bind(ParamedicalServiceServiceInterface::class, ParamedicalServiceService::class);   

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
