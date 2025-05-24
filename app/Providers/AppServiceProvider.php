<?php

namespace App\Providers;

use App\Repositories\AuthRepository;
use App\Repositories\Interfaces\AuthRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Services\AuthService;
use App\Services\Interfaces\AuthServiceInterface;
use App\Services\Interfaces\UserServiceInterface;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

   public $bindings = [
        UserRepositoryInterface::class => UserRepository::class,
        UserServiceInterface::class => UserService::class,
        AuthRepositoryInterface::class => AuthRepository::class,
        AuthServiceInterface::class => AuthService::class,
    ];
    public function register()
    {
        foreach($this->bindings as $key => $value){
            $this->app->bind($key,$value);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
    }
}
