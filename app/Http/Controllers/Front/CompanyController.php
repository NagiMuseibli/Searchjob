<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::paginate(9);
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
        $jobs = Job::where('company_id', '=', $id)->get();
        //dd($jobs);
        return view('view.company-single', [
            'company' => $company,
            'jobs' => $jobs,

        ]);
    }
}
