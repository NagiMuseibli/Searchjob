<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Job;

class VacancyController extends Controller
{
    public function index(Request $request)
    {

        $searchTerm = $request->searchTerm;
        $category = $request->category;

        $jobs = Job::with('category', 'company')
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
            ->paginate(5);


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
