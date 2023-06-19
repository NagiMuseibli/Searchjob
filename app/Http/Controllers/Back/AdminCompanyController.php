<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCompanyController extends Controller
{
    public function index()
    {
        $user = User::with('company')->find(Auth::id());
        return view('view.user.company', compact('user'));
    }
}
