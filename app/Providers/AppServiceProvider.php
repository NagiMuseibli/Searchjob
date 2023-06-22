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
        View::composer('*', function ($view) {
            // dd(auth()->user()->role);
            if (auth()->user() && auth()->user()->role == 'company') {
                $user = User::with('company')->find(auth()->id());

                $view->with([
                    'profile_name' => $user->company->company_name,
                    'profile_image' => $user->company->image,
                    'user_name' => $user->name,
                    'profile_email' => $user->email,
                ]);
            }
            if (auth()->user() && auth()->user()->role == 'candidate') {
                $user = User::with('candidate')->find(auth()->id());

                $view->with([
                    'profile_name' => $user->candidate->name,
                    'profile_image' => $user->candidate->image,
                    'user_name' => $user->name,
                    'profile_email' => $user->email,
                ]);
            }


            // dd($view->company_name);
        });
        Paginator::useBootstrap();
    }
}
