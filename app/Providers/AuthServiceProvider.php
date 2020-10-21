<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('sp-admin', function ($user){
            return $user->role == 2;
        });

        Gate::define('create-edit', function ($user){
            return $user->role >= 1;
        });

        Gate::define('edit-user', function ($user, $crUser){
            if ($user->id == $crUser->id || $user->role >= 1){
                return true;
            } else {
                return false;
            }
        });

        Gate::define('edit-cmt', function ($user, $cmt){

        });
        //
    }
}
