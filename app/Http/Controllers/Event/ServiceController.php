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

class ServiceController extends Controller
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
    public function page_service($alias)
    {
        $categories = Categories::where('alias', $alias)->first();
        if(isset($categories))
        {
            $data_page_service = Post::where('cate_id', $categories->id)->where('blocked', 0)->first();
            $top_product_of_service = Product::getProductByAlias('da-ngoai-teambuiding', 5);
            return view('event.service.page_service', compact('data_page_service','categories','top_product_of_service'));
        }
        else{
            return back();
        }
    }

    public function page_price_check()
    {
        return view('event.service.page_price_check');
    }

    public function page_thank_you()
    {
        return view('event.service.page_thank_you');
    }
    public function postCustomerContact(Request $request)
    {
        try
        {
            DB::beginTransaction();
                $data = new Contact();            
                $data->type = "CONTACT";
                $data->name = trim($request->name);
                $data->phone = trim($request->phone);
                $data->email = trim($request->email);
                $data->content = empty($request->content)?"":$request->content;
                $data->flag = 0;
                $data->blocked = $request->status == 'on' ? 0 : 1;
                $data->options = '{}';
                $data->image = "";
                $data->save();            
            DB::commit();
            Log::debug('get.event.thankyou');
            return redirect()->route('get.event.thankyou');

        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            Log::debug($e->getMessage());
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }
}
