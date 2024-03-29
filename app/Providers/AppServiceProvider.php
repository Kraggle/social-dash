<?php

namespace App\Providers;

use App\Models\Team;
use App\Models\User;
use App\Helpers\AppHelper;
use Laravel\Cashier\Cashier;
use App\Observers\UserObserver;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        User::observe(UserObserver::class);
        Cashier::useCustomerModel(Team::class);

        Blade::extend(function ($value) {
            return preg_replace('/\@define\((.+)\)/', '<?php ${1}; ?>', $value);
        });

        Blade::extend(function ($value) {
            return preg_replace('/\@icon\((.+?)\)/', '<i class="<?php echo ${1}; ?>" aria-hidden="true"></i>', $value);
        });
    }
}
