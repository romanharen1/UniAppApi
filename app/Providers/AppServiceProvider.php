<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //check if admin
        //return true if auth user type is admin
        $gate->define('isAdmin', function ($user) {
            return $user->user_type == 'admin';
        });
        //check if host
        //return true if auth user type is host
        $gate->define('isHost', function ($user) {
            return $user->user_type == 'host';
        });

        //check if user
        //return true if auth user type is host
        $gate->define('isUser', function ($user) {
            return $user->user_type == 'user';
        });
    }
}
