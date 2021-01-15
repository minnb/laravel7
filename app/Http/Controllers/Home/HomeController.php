<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SysPage;
use App\Utils\HomeMucTieu;
use App\Models\Product;

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
        $topTourIndex = Product::where('blocked',0)->orderBy('id', 'desc')->limit(4)->get();
        return view('home.layouts.index', compact('homePage','MucTieu','topTourIndex'));
    }
}
