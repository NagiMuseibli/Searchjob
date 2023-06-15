<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Job;

class VacancyController extends Controller
{
    public function index()
    {
        $jobs = Job::with('category', 'company')->orderByDesc('created_at')->paginate(5);

        //dd($jobs);
        $categories = Category::all();
        return view('view.vacancies', [
            'jobs' => $jobs,
            'categories' => $categories,
        ]);
    }
}
