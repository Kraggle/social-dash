<?php

namespace App\Providers;

use App\Team;
use App\User;
use Laravel\Cashier\Cashier;
use App\Observers\UserObserver;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        User::observe(UserObserver::class);
        Cashier::useCustomerModel(Team::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }
}
