<?php

namespace App\Providers;

use App\Repositories\Customer\CustomerRepo;
use App\Repositories\Customer\ICustomerRepo;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ICustomerRepo::class, CustomerRepo::class);
    }
}
