<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        return view('view.resumes');
    }

    public function show()
    {
        return view('view.resume-single');
    }
}
