<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        /* Category::create([
            "name" => "IT & Development"
        ]); */
        /* Job::create([
            "category_id" => 1,
            "company_id" => 1,
            "work_hour" =>"Full Time",
            "title" => "Php/(Laravel) Developer",
            "description" => "Şirkətimizə təcrübəli Php/(Laravel) Developer axtarırıq.",
            "requirements" => "Core Php, Laravel Framework, MVC, OOP",
            "salary" => "700-1000",
            "location" => "Bakı",
            "deadline" => "30.04.2023",
        ]);
        Job::create([
            "category_id" => 1,
            "company_id" => 1,
            "work_hour" =>"Part Time",
            "title" => "Front-End Developer",
            "description" => "Şirkətimizə təcrübəli Front-End Developer axtarırıq.",
            "requirements" => "Html, Css, Javascript, React",
            "salary" => "500-800",
            "location" => "Bakı",
            "deadline" => "30.04.2023",
        ]);
        Job::create([
            "category_id" => 1,
            "company_id" => 1,
            "work_hour" =>"Full Time",
            "title" => "C# Developer",
            "description" => "Şirkətimizə təcrübəli C# Developer axtarırıq.",
            "requirements" => "C#, .Net Framework, MVC, OOP",
            "salary" => "700-1000",
            "location" => "Bakı",
            "deadline" => "30.04.2023",
        ]); */
        /*  Job::create([
            "category_id" => 1,
            "company_id" => 1,
            "work_hour" => "Full Time",
            "title" => "Php Developer",
            "description" => "Şirkətimizə təcrübəli Php Developer axtarırıq.",
            "requirements" => "Php, MVC, OOP",
            "salary" => "800-1000",
            "location" => "Bakı",
            "deadline" => "30.04.2023",
        ]); */
        // $jobs = Job::with('category')->orderByDesc('created_at')->get();
        $jobs = Job::with('category', 'company')->where('status', 1)->orderByDesc('created_at')->limit(18)->get();

        $categories = Category::all();
        $count_job = Job::countCategoryJobs();
        $count_job = $count_job[1]->job_count;
        $companies = Company::All();
        //dd(count($jobs));
        return view('view.home', [
            'jobs' => $jobs,
            'categories' => $categories,
            'companies' => $companies,
            'count_job' => $count_job,
        ]);
    }

    public function show_vacancy($id)
    {
        $jobs = Job::with('category')->find($id);
        $category_id = $jobs->category->id;

        $related_jobs = Job::relatedJobs($category_id);
        $company = Job::with('company')->find($id);
        // $users = User::where('is_employer', 0)->all();
        return view('view.job-single', [
            'jobs' => $jobs,
            'company' => $company,
            'related_jobs' => $related_jobs,
        ]);
    }
}
