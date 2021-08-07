<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider {
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Role::class => RolePolicy::class,
        Account::class => AccountPolicy::class,
        Defaults::class => DefaultsPolicy::class,
        Package::class => PackagePolicy::class,
        Post::class => PostPolicy::class,
        Team::class => TeamPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot() {
        $this->registerPolicies();

        Gate::define('manage-users', 'App\Policies\UserPolicy@manageUsers');
        Gate::define('manage-accounts', 'App\Policies\UserPolicy@manageAccounts');
    }
}
