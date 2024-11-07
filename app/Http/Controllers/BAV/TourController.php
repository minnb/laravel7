<?php
namespace App\Http\Controllers\BAV;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SysPage;
use App\Utils\HomeMucTieu;
use App\Models\Product;
use App\Models\Post;
use App\Models\Categories;
use App\Models\Teams;
use App\Services\ProductService;

class TourController extends Controller
{
    public function __construct(ProductService $tourService)
    {
        $this->tourService = $tourService;
    }

    public function list_tours_by_cate($cate)
    {
    	try
    	{
			$cate_of_list = Categories::where('alias', $cate)->get();
	        $tours_by_cate = Product::where('categories', $cate_of_list[0]->id)->get();
	        return view('bav.tour.tours_by_cate', compact('cate_of_list','tours_by_cate'));
    	}
        catch (\Exception $e) 
        {
        	return back();
        }
    }

    public function detail($cate, $id, $alias)
    {
        try
        {
        	$cate_of_tour = Categories::where('alias', $cate)->get();
	        $tour_detail = Product::find($id);
    	    return view('bav.tour.detail', compact('id','cate_of_tour','tour_detail'));
        }
        catch(\Exception $e) 
        {
        	return back();
        }
    }

}