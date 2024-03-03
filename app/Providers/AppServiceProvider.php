<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\UsersRepository;
use App\RepositoryInterfaces\UsersRepositoryInterface;
use App\Repositories\HousesRepository;
use App\RepositoryInterfaces\HousesRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
            $this->app->bind(UsersRepositoryInterface::class, UsersRepository::class);
            $this->app->bind(HousesRepositoryInterface::class, HousesRepository::class);
        
    }

   
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
