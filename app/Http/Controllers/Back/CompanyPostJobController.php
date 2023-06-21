<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyPostJobController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id())->first();
        return view('view.admin.post-job', compact('user'));
    }
}
