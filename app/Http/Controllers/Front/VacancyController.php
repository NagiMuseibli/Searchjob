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

        $searchTerm = $request->searchTerm;
        $category = $request->category;
        // dd($category);
        /*  $jobs = Job::with('category', 'company')
            ->where(function ($query) use ($searchTerm, $category) {
                $query->where('title', 'LIKE', "%$searchTerm%")
                    ->orWhereHas('category', function ($query) use ($category) {
                        $query->where('name', 'LIKE', "%$category%");
                    })
                    ->orWhereHas('company', function ($query) use ($searchTerm) {
                        $query->where('company_name', 'LIKE', "%$searchTerm%");
                    });
            })
            ->orderByDesc('created_at')
            ->paginate(5); */
        $query = Job::query();


        if ($request->searchTerm != '' || $request->category != '') {
            // Search by vacancy name
            if ($request->has('searchTerm')) {
                $query->where('title', 'LIKE', '%' . $request->input('searchTerm') . '%');
            }

            // Search by category
            if ($request->has('category')) {
                $category = Category::where('id', $request->input('category'))->first();
                if ($category) {
                    $query->where('category_id', $category->id);
                }
            }

            // Search by company
            /* if ($request->has('searchTerm')) {
                $company = Company::where('company_name', 'LIKE', '%' . $request->input('searchTerm' . '%'))->first();
                if ($company) {
                    $query->where('company_id', $company->id);
                }
            } */


            $jobs = $query->orderByDesc('created_at')->paginate(5);
            // dd($jobs);
        } else {
            $jobs = Job::with('category', 'company')->orderByDesc('created_at')->paginate(5);
        }


        // dd($jobs);

        $job_count = count(Job::all());

        //dd($jobs);&category=all
        $categories = Category::all();
        return view('view.vacancies', [
            'jobs' => $jobs,
            'categories' => $categories,
            'job_count' => $job_count,
        ]);
    }
}
