<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPolicies();

        // Define gates for roles
        Gate::define('isAdmin', function($user) {
            return $user->role == 1;
        });

        Gate::define('isMasyarakat', function($user) {
            return $user->role == 2;
        });

        Gate::define('isRT', function($user) {
            return $user->role == 3;
        });

        Gate::define('isRW', function($user) {
            return $user->role == 4;
        });

        Gate::define('isKelurahan', function($user) {
            return $user->role == 5;
        });
    }
}