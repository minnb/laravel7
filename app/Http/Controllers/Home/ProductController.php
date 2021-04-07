<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Log; use DB;
use Illuminate\Http\Request;
use App\Models\SysPage;
use App\Utils\HomeMucTieu;
use App\Utils\TourOpt;
use App\Models\Categories;
use App\Models\Product;
use App\Models\Contact;

class ProductController extends Controller
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

    public function list($cate)
    {
        $cate_name = Categories::where('alias', $cate)->first();
        $lstProduct = Product::where([
            ['blocked', 0]
            ])->orderBy('id', 'desc')->paginate(4);
        return view('home.tour.list', compact('lstProduct','cate_name'));
    }

    public function listByLocation($cate, $id, $name)
    {
        $cate_name = Categories::where('alias', $cate)->first();
        $location_name = Categories::find($id);
        $lstProduct = Product::where([
            ['blocked', 0],
            ['Categories', 'like', '%'.$id.'%']
            ])->orderBy('id', 'desc')->paginate(4);
        return view('home.tour.list-by-location', compact('lstProduct','cate_name','location_name'));
    }
 
    public function detail($cate, $id, $name)
    {
        $detailTour = Product::find($id);
        if(isset($detailTour))
        {
            $panelTour = Product::where([
                ['id','!=', $id],
                ['blocked',0]])->orderBy('id', 'desc')->limit(4)->get();
            $tourPolicy = new TourOpt();
            if($detailTour->options != '{}' || empty($detailTour->options))
            {
                $tourPolicy = json_decode($detailTour->options);
            }
            return view('home.tour.detail', compact('detailTour', 'panelTour', 'tourPolicy'));
        }
        else
        {
            return redirect()->route('home');
        }
    }

    public function guide(Request $request, $type)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        try{
            if(!$validator->fails()){
                DB::beginTransaction();
                    $data = new Contact();
                    $data->type = $type;
                    $data->name = trim($request->name);
                    $data->email = trim($request->email);
                    $data->phone = trim($request->phone);
                    $data->content = empty($request->content)?"":$request->content;
                    $data->flag = 0;
                    $data->blocked = 0;
                    $data->options = "{}";

                    $data->save();
                DB::commit();
               return redirect()->route('home');
            }else{
                return back()->withErrors($e->getMessage())->withInput($request->input());
            }
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }
}

