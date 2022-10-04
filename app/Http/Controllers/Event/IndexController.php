<?php

namespace App\Http\Controllers\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SysPage;
use App\Utils\HomeMucTieu;
use App\Models\Product;
use App\Models\Post;
use App\Models\Categories;
use DB;

class IndexController extends Controller
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
        $tour_home_page = Product::getProductByAlias('da-ngoai-teambuiding', 3);
        $service_page = Categories::getServicePage();
        return view('event.layouts.index', compact('tour_home_page','service_page'));
    }


}
