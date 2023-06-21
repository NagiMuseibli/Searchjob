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
        // $user = User::where('id', auth()->id())->with('company')->first();
        $user = User::find(Auth::id());
        // dd($user);
        return view('view.admin.company', compact('user'));
    }
}
