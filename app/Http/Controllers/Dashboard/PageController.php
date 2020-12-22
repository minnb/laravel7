<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Log; use DB;
use Auth;use Image;
use App\Models\Roles;
use App\Models\Categories;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

	public function home()
    {
        return view('dashboard.page.home');
    }

    public function create()
    {
        return view('dashboard.page.create');
    }

    public function postCreate(Request $request)
    {
        
    }

    public function edit($id)
    {
        return view('dashboard.page.create');
    }

    public function postEdit(Request $request, $id)
    {
        
    }
}
