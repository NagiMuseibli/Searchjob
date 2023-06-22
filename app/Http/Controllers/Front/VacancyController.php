<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Job;

class VacancyController extends Controller
{
    public function index(Request $request)
    {

        $category = $request->category;
        $query = Job::query();


        if (
            $request->searchTerm != ''
            || $request->category != ''
            || $request->company != ''
            || $request->city != ''
            || $request->work_graphic != ''
        ) {
            // Search by vacancy name
            if ($request->searchTerm) {
                $query->where('title', 'LIKE', '%' . $request->input('searchTerm') . '%');
            }

            // Search by category
            if ($request->category) {
                $category = Category::where('id', $request->input('category'))->first();
                if ($category) {
                    $query->where('category_id', $category->id);
                }
            }
            // Search by company
            if ($request->company) {
                $company = Company::where('id', $request->input('company'))->first();
                if ($company) {
                    $query->where('company_id', $company->id);
                }
            }
            // Search by city
            if ($request->city) {
                $query->where('location',  $request->input('city'));
            }
            // Search by work_graphic
            if ($request->work_graphic) {
                $query->where('work_hour', $request->input('work_graphic'));
            }
            // Search by salary soon...


            $jobs = $query->where('status', 1)->orderByDesc('created_at')->paginate(5);
            // dd($jobs);
        } else {
            $jobs = Job::where('status', 1)->with('category', 'company')->orderByDesc('created_at')->paginate(5);
        }

        $job_count = count(Job::all());
        $categories = Category::all();
        $companies = Company::all();
        // return response()->json(['jobs' => $jobs]);
        return view('view.vacancies', [
            'jobs' => $jobs,
            'categories' => $categories,
            'companies' => $companies,
            'job_count' => $job_count,
        ]);
    }
}
