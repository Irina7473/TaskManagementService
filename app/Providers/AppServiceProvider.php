<?php

namespace App\Providers;

use App\View\Components\Sidebar;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        //
        //view()->share('newUsersThisWeekCount',
        //            User::where('created_at', '>', now()->subDays(7))->count());
        //view()->share('fieldID', '-1');
        View::share('key', 'value');
        Blade::component('sidebar', Sidebar::class);
    }
}
