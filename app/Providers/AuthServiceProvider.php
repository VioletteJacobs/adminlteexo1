<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use PhpParser\Node\Stmt\If_;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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
        Gate::define("article-edit", function($user, $article){
            return $user->id == $article->user_id;
        });
        // $this->registerPolicies();
        Gate::define("user-delete", function($user, $currentUser){
            // dd($currentUser);
            if ($user->role_id == 1 && $currentUser->role_id != 1) {
                return  true;
            }else{
                return false;
            }
        });
    }
}
