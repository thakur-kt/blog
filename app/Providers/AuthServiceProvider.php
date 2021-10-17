<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Post;
use App\Models\User;
use App\Policies\PostPolicy;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Post' => 'App\Policies\PostPolicy',
      Post::class =>PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        Gate::define('update-post', function (User $user, Post $post) {
            return $user->id === $post->user_id;
        });
        Gate::define('super-admin-task', function (User $user) {
            return $user->id === 1;
        });
    }
}
