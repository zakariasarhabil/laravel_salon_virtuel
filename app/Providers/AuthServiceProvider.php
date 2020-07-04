<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define("stand.update", function($user, $stand) {
        //     return $user->id === $stand->user_id;
        // });

        // Gate::define("stand.delete", function($user, $stand) {
        //     return $user->id === $stand->user_id;
        // });

        // Gate::define("post.stand",function($user, $stand){
        //     return $user->is_exposant === false;
        // });


        // Gate::before(function($user, $ability){
        //     if($user->is_exposant && in_array($ability, ["post.stand"]) ) {
        //         return true;
        //     }
        // });



    }
}
