<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
        $query = Company::query();
        if ($request->company != '') {
            if ($request->company) {
                $query->where('company_name', 'LIKE', '%' . $request->company . '%');
            }

            $companies = $query->orderByDesc('created_at')->paginate(9);
        } else {
            $companies = Company::orderByDesc('created_at')->paginate(9);
        }

        $company_count = count(Company::all());



        // $jobs = Job::with('company')->get();
        $jobs = Job::countCompanyJobs();
        return view('view.companies', [
            'companies' => $companies,
            'jobs' => $jobs,
            'company_count' => $company_count,
        ]);
    }

    public function show($id)
    {
        $company = Company::find($id);
        $jobs = Job::where('company_id', '=', $id)->orderByDesc('created_at')->get();
        //dd($jobs);
        return view('view.company-single', [
            'company' => $company,
            'jobs' => $jobs,

        ]);
    }
}
