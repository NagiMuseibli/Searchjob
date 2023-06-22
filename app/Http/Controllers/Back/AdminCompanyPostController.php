<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostJobRequest;
use App\Models\Category;
use App\Models\Company;
use App\Models\job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AdminCompanyPostController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        // dd($request);
        return view('view.admin.post-job', [
            'categories' => $categories
        ]);
    }

    public function create(PostJobRequest $request)
    {
        $company_id = Company::where('user_id', auth()->id())->value('id');


        $currentDate = Carbon::now();
        $oneMonthLater = $currentDate->addMonth()->format('Y-m-d');
        $job = job::create([
            'company_id' => $company_id,
            'category_id' => $request->job_category,
            'work_hour' => $request->work_hour,
            'title' => $request->job_title,
            'description' => $request->job_description,
            'requirements' => $request->job_requirements,
            'salary' => $request->salary,
            'location' => $request->city,
            'exp_year' => $request->exp_year,
            'status' => 0,
            'count' => 0,
            'deadline' => $oneMonthLater

        ]);
        // dd($job);

        if ($job->save()) {
            session()->flash('success', 'Vakansiya uğurla əlavə edildi. 
            Maderatorlar tərəfindən yoxlandıqdan sonra vakansiyanız aktiv ediləcək.');
        }

        return redirect()->route('post_job_view');
    }
}
