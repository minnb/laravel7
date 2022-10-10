<?php

namespace App\Http\Controllers\Event;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\SysPage;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Post;
use App\Models\Categories;
use DB;

class EventController extends Controller
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

    public function post_event_list($alias)
    {
        $categories = Categories::where('alias', $alias)->first();
        if(isset($categories))
        {
            $top_product_of_service = Product::getProductByAlias('da-ngoai-teambuiding', 5);
            $meta_description = $categories->description;
            return view('event.post.event_list', compact('categories','top_product_of_service','meta_description'));
        }
        else{
            return back();
        }
    }

    public function post_event_detail($alias)
    {
        $product_detail = Product::where('alias', $alias)->first();
        if(isset($product_detail))
        {
            $categories = Categories::where('id', $product_detail->categories)->first();
            $top_product_of_service = Product::getProductByAlias('da-ngoai-teambuiding', 5);
            $page_title = $product_detail->name;
            $meta_description = $product_detail->description;
            return view('event.post.event_detail', compact('product_detail', 'categories','top_product_of_service','page_title','meta_description'));
        }
        else
        {
            return back();
        }
    }

    public function post_blog_detail($alias)
    {
        $product_detail = Post::where('alias', $alias)->first();
        if(isset($product_detail))
        {
            $categories = Categories::where('id', $product_detail->cate_id)->first();
            $top_product_of_service = Product::getProductByAlias('da-ngoai-teambuiding', 5);
            $page_title = $product_detail->name;
            $meta_description = $product_detail->description;
            return view('event.post.blog_detail', compact('product_detail', 'categories','top_product_of_service','page_title','meta_description'));
        }
        else
        {
            return back();
        }
    }
}
