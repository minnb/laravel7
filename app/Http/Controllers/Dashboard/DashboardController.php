<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Log;
use Auth;
use App\Models\Roles;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
    	if(Roles::isAdmin(Auth::User()->id)){
            return view('dashboard.layouts.index');
        }else{
            return redirect('/');
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('dashboard');
    }	
}
