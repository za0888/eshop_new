<?php

namespace App\Providers;

use App\enums\UserStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Blade::if('manager', function () {
//            $userStatus = auth()->user()->status->value;
            $userStatus = auth()->user()->status;

            return $userStatus !== UserStatus::Customer;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        Model::preventLazyLoading(!$this->app->isProduction());

        Model::shouldBeStrict(!$this->app->isProduction());

//        @bloger
        Blade::if('manager',
            fn() => Auth::user()?->status === UserStatus::Manager);

        Gate::before(fn(User $user) => $user->status === UserStatus::Administrator);
    }

}
