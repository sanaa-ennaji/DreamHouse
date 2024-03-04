<?php

namespace App\Providers;

use App\Repositories\UsersRepository;
use App\Repositories\HousesRepository;
use Illuminate\Support\ServiceProvider;

use App\RepositoryInterfaces\UsersRepositoryInterface;
use App\RepositoryInterfaces\HousesRepositoryInterface;

use App\Repositories\ReservationsRepository;
use App\RepositoryInterfaces\ReservationsRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
            $this->app->bind(UsersRepositoryInterface::class, UsersRepository::class);
            $this->app->bind(HousesRepositoryInterface::class, HousesRepository::class);
            $this->app->bind(ReservationsRepositoryInterface::class, ReservationsRepository::class);
        
    }

   
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
