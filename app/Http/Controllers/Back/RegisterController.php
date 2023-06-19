<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterCompRequest;
use App\Http\Requests\RegisterCondRequest;
use App\Models\candidate;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function show()
    {
        return view('view.register-candidate');
    }
    public function showcompany()
    {
        return view('view.register-company');
    }

    public function register_candidate(RegisterCondRequest $request)
    {
        $validated = $request->validated();
        //dd($request);
        if ($validated) {
            //dd($request);
            $id = DB::table('users')->insertGetId(
                [
                    'name' =>  $request->name,
                    'email' => $request->email,
                    'is_moderator' => 0,
                    'password' => Hash::make($request->password),
                    'role' => 'candidate'

                ]
            );

            $candidate = new candidate();
            $candidate->user_id = $id;
            $candidate->name = $request->name;
            $candidate->email = $request->email;
            $candidate->image = 'nopic-candidate.jpg';
            $candidate->save();
            // Log the user in and redirect to the home page
            //Auth::login($user);
            return redirect()->route('login');
        } else {
            return back()->withErrors($validated)->withInput();
        }
    }

    public function register_company(RegisterCompRequest $request)
    {
        //dd($request);
        $validated = $request->validated();

        if ($validated) {
            //dd($request);
            // Create a new user and save it to the database
            $id = DB::table('users')->insertGetId(
                [
                    'name' =>  $request->company_name,
                    'email' => $request->email,
                    'is_moderator' => 0,
                    'password' => Hash::make($request->password),
                    'role' => 'company'

                ]
            );

            $company = new Company();
            $company->company_name = $request->company_name;
            $company->user_id = $id;
            $company->email = $request->email;
            $company->phone = $request->company_tel;
            $company->about_company = $request->about_company;
            $company->cv_email = $request->company_cv_email;
            $company->image = 'nopic-company.jpg';
            $company->save();

            // Log the user in and redirect to the login page
            //Auth::login($user);
            return redirect()->route('login');
        } else {
            return back()->withErrors($validated)->withInput();
        }
    }
}
