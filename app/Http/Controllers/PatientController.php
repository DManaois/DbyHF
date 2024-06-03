<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class PatientController extends Controller
{
    /**
     * Show the student dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('patient.dashboard');
    }

}
