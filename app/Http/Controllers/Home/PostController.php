<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SysPage;
use App\Utils\HomeMucTieu;
use App\Models\Product;
use App\Models\Post;

class PostController extends Controller
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
    public function detailPost($cate, $id, $name)
    {
        $detailPost = Post::find($id);
        $panelTour = Product::where('blocked',0)->orderBy('id', 'desc')->limit(4)->get();
        return view('home.post.detail', compact('detailPost','panelTour'));
    }
}
