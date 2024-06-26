<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
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

        Gate::define('PregnantMother', function (User $user) {
            return $user->role->name === 'Ibu Hamil';
        });

        Gate::define('Midwife', function (User $user) {
            return $user->role->name === 'Bidan';
        });

        Gate::define('Doctor', function (User $user) {
            return $user->role->name === 'Dokter';
        });

        Gate::define('Admin', function (User $user) {
            return $user->role->name === 'Admin';
        });
    }
}
