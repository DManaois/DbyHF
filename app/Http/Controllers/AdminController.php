<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\View\View
     */ 

    public function index()
    {
        $patients = User::where('role', 'patient')->get();
        return view('admin.dashboard', compact('patients'));
    }
    
    
    
}
