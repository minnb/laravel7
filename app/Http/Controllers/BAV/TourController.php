<?php
namespace App\Http\Controllers\BAV;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SysPage;
use App\Utils\HomeMucTieu;
use App\Models\Product;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Categories;
use App\Models\Teams;
use App\Services\ProductService;
use DB;

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

    public function list_tours_by_location($alias)
    {
                $tag_data = Tag::where('alias', $alias)->get();
                $tours_by_location = Product::getProductByTagAlias($alias, 24);
                $ids = $tours_by_location->pluck('categories')->toArray();
                $cate_of_list = DB::table('m_categories')->whereIn('id', $ids)->get();
                return view('bav.tour.tours_by_location', compact('cate_of_list','tours_by_location', 'tag_data'));

        // try
        // {
        //     $tag_data = Tag::where('alias', $alias)->get();
        //                     $tours_by_location = Product::getProductByAlias($alias, 24);
        //         $ids = $products->pluck('categories')->toArray();
        //         $cate_of_list = DB::table('m_categories')->whereIn('id', $ids)->get();
        //         return view('bav.tour.tours_by_cate', compact('cate_of_list', 'tours_by_location', 'tag_data'));

        //     // if(isset($tag_data))
        //     // {
        //     //     $tours_by_location = Product::getProductByAlias($alias, 24);
        //     //     $ids = $products->pluck('categories')->toArray();
        //     //     $cate_of_list = DB::table('m_categories')->whereIn('id', $ids)->get();
        //     //     return view('bav.tour.tours_by_cate', compact('cate_of_list', 'tours_by_location', 'tag_data'));
        //     // }
        //     // else
        //     // {
        //     //     return back();
        //     // }
        // }
        // catch(\Exception $e) 
        // {
        //     return back();
        // }
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