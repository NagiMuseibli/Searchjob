<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(LoginRequest $request)
    {

        $company = Company::where('email', '=', $request->email)->count();
        // dd($company);
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back()->with('danger_login', 'Email və ya parol yalnışdır');
        }
        if ($company == 1) {
            return redirect()->route('company');
        } else {
            return redirect()->route('candidate');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
