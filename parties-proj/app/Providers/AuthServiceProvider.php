<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
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

        Gate::define('operate-city', [CityPolicy::class, 'operate']);
        Gate::define('operate-department', [DepartmentPolicy::class, 'operate']);
        Gate::define('operate-legal', [LegalPolicy::class, 'operate']);
        Gate::define('operate-member', [MemberPolicy::class, 'operate']);
        Gate::define('operate-organisation', [OrganisationPolicy::class, 'operate']);
        Gate::define('operate-purpos', [PurposPolicy::class, 'operate']);
        Gate::define('operate-social', [SocialPolicy::class, 'operate']);
        Gate::define('operate-type', [TypePolicy::class, 'operate']);

        Gate::define('creare-discount', [DiscountPolicy::class, 'create']);
        Gate::define('update-discount', [DiscountPolicy::class, 'update']);
        Gate::define('delete-discount', [DiscountPolicy::class, 'delete']);
        Gate::define('creare-document', [DocumentPolicy::class, 'create']);
        Gate::define('update-document', [DocumentPolicy::class, 'update']);
        Gate::define('delete-document', [DocumentPolicy::class, 'delete']);
    }
}
