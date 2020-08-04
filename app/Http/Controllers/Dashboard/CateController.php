<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Log;
use Auth;
use App\Models\Roles;

class CateController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function list()
    {
    	
    }

    public function create()
    {
        
    }

    public function postCreate(Request $request)
    {

    }

    public function edit()
    {
        
    }
	
    public function postEdit(Request $request, $id)
    {

    }
}
