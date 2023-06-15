<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('view.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'email' => 'email|required',
        ]);
        $company = Company::where('email', '=', $request->email)->count();
        // dd($company);
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back()->with('message', 'Email və ya parol yalnışdır');
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
