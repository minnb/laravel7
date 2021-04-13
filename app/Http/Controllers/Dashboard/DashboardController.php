<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Log;
use Auth;
use App\Models\Roles;
use App\Models\Contact;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $contact_Dasboard = Contact::orderBy('id', 'DESC')->limit(5)->get();
    	return view('dashboard.layouts.index', compact('contact_Dasboard'));
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('home');
    }	
}
