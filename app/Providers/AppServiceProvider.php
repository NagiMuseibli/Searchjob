<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

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
        // Query showing for on navbar
        // $user = User::with('company')->find(Auth::id());
        /* $user = User::where('id', auth()->id())->with('candidate', 'company')->first();
        dd($user);
        View::share('user', $user); */

        Paginator::useBootstrap();
    }
}
