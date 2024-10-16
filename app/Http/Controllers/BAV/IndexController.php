<?php

namespace App\Http\Controllers\BAV;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SysPage;
use App\Utils\HomeMucTieu;
use App\Models\Product;
use App\Models\Post;
use App\Models\Teams;
use App\Services\ProductService;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProductService $tourService)
    {
        $this->tourService = $tourService;
        //$this->middleware('guest');
    }

    public function index()
    {
        $index_category = $this->tourService->getCategory()->where('type', 1)->where('parent','<>', 0);
        return view('bav.layouts.index', compact('index_category'));
    }

    public function contact()
    {
        $homePage = SysPage::where('category','HOMEPAGE')->first();
        $topTourIndex = Product::Top4Product(4);
        return view('bav.pages.contact', compact('homePage','topTourIndex'));
    }
}
