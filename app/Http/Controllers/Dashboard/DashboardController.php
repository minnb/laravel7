<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Log;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('dashboard.app');
    }
}
