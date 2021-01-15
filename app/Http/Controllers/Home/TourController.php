<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SysPage;
use App\Utils\HomeMucTieu;
use App\Models\Product;

class TourController extends Controller
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
    public function detailTour($cate, $id, $name)
    {
        $detailTour = Product::find($id);
        $panelTour = Product::where([
            ['id','!=', $id],
            ['blocked',0]])->orderBy('id', 'desc')->limit(4)->get();
        return view('home.layouts.tour-detail', compact('detailTour', 'panelTour'));
    }
}
