<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SysPage;
use App\Utils\HomeMucTieu;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $homePage = SysPage::where('category','HOMEPAGE')->first();
        $MucTieu = json_decode($homePage->options);
        return view('home.layouts.index', compact('homePage','MucTieu'));
    }
}
