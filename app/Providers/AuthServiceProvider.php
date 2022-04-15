<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('is_admin',function($user){
            if($user->email === 'admin@mail.com'){
                return true;
            }else{
                return false;
            }
        });

        $this->registerPolicies();
        Gate::define('not_admin',function($user){
            if($user->email != 'admin@mail.com'){
                return true;
            }else{
                return false;
            }
        });

        //
    }
}
