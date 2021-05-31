<?php

namespace Crater\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Customer;
use Tenancy\Identification\Contracts\ResolvesTenants

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapThree();
        $this->loadJsonTranslationsFrom(resource_path('assets/js/plugins'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->resolving(ResolvesTenants::class, function (ResolvesTenants $resolver){
            $resolver->addModel(Customer::class);
            return $resolver;
        });
    }
}
