<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\ProfessionRepositoryInterface;
use App\Services\Interfaces\ProfessionServiceInterface;
use App\Repositories\Interfaces\DoctorRepositoryInterface;
use App\Services\Interfaces\DoctorServiceInterface;
use App\Repositories\Interfaces\EventRepositoryInterface;
use App\Services\Interfaces\EventServiceInterface;
use App\Repositories\Interfaces\AppointmentRepositoryInterface;
use App\Services\Interfaces\AppointmentServiceInterface;
use App\Services\Interfaces\SessionServiceInterface;
use App\Repositories\Interfaces\SessionRepositoryInterface;
use App\Repositories\Interfaces\ParamedicalServiceRepositoryInterface;
use App\Services\Interfaces\ParamedicalServiceServiceInterface;
use App\Repositories\Interfaces\MemberParamedicalServiceRepositoryInterface;
use App\Services\Interfaces\MemberParamedicalServiceServiceInterface;
use App\Repositories\Interfaces\AdminRepositoryInterface;
use App\Services\Interfaces\AdminServiceInterface;
use App\Repositories\AdminRepository;
use App\Services\AdminService;
use App\Repositories\Interfaces\SecretaryRepositoryInterface;
use App\Services\Interfaces\SecretaryServiceInterface;
use App\Repositories\SecretaryRepository;
use App\Services\SecretaryService;
use App\Repositories\ProfessionRepository;
use App\Services\ProfessionService;
use App\Repositories\DoctorRepository;
use App\Services\DoctorService;
use App\Repositories\EventRepository;
use App\Services\EventService;
use App\Repositories\AppointmentRepository;
use App\Services\AppointmentService;
use App\Services\SessionService;
use App\Repositories\SessionRepository;
use App\Repositories\ParamedicalServiceRepository;
use App\Services\ParamedicalServiceService;
use App\Repositories\MemberParamedicalServiceRepository;
use App\Services\MemberParamedicalServiceService;
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
        $this->app->bind(SecretaryRepositoryInterface::class, SecretaryRepository::class);   
        $this->app->bind(SecretaryServiceInterface::class, SecretaryService::class);   
        $this->app->bind(AdminRepositoryInterface::class, AdminRepository::class);   
        $this->app->bind(AdminServiceInterface::class, AdminService::class);   
        $this->app->bind(SessionServiceInterface::class, SessionService::class);   
        $this->app->bind(SessionRepositoryInterface::class, SessionRepository::class);   
        $this->app->bind(EventRepositoryInterface::class, EventRepository::class);   
        $this->app->bind(EventServiceInterface::class, EventService::class);   
        $this->app->bind(AppointmentRepositoryInterface::class, AppointmentRepository::class);   
        $this->app->bind(AppointmentServiceInterface::class, AppointmentService::class);   
        $this->app->bind(ParamedicalServiceRepositoryInterface::class, ParamedicalServiceRepository::class);
        $this->app->bind(ParamedicalServiceServiceInterface::class, ParamedicalServiceService::class);
        $this->app->bind(MemberParamedicalServiceRepositoryInterface::class, MemberParamedicalServiceRepository::class);
        $this->app->bind(MemberParamedicalServiceServiceInterface::class, MemberParamedicalServiceService::class); 
        $this->app->bind(DoctorServiceInterface::class, DoctorService::class); 
        $this->app->bind(DoctorRepositoryInterface::class, DoctorRepository::class);

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
