<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SysPage;
use App\Utils\HomeMucTieu;
use App\Models\Product;
use App\Models\Post;

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
        $topTourIndex = Product::Top4Product(4);
        $topPostIndex = Post::Top3Post(3);
        return view('home.layouts.index', compact('homePage','MucTieu','topTourIndex','topPostIndex'));
    }

    public function contact()
    {
        $homePage = SysPage::where('category','HOMEPAGE')->first();
        $topTourIndex = Product::Top4Product(4);
        return view('home.layouts.contact', compact('homePage','topTourIndex'));
    }
}
