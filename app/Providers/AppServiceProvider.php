<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
    public function boot()
    {
        Paginator::defaultView('vendor.pagination.default');

        Paginator::defaultSimpleView('vendor.pagination.simple-default');

        View::composer(
            'pages._sidebar', 'App\Http\View\Composers\SidebarComposer'
        );

        View::composer(
            'admin._sidebar', 'App\Http\View\Composers\AdminSidebarComposer');
    }

}
