<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Log; use DB;
use Auth;use Image;
use App\Models\Product;
use App\Models\Product_Attributes;
use App\Models\Attributes;
use App\Models\SalesPrice;
use App\Models\ScheduleTour;

class ScheduleController extends Controller
{

	public function __construct()
    {
        $this->middleware('admin');
    }

    public function list()
    {
    	$ldate = date('Y-m-d');
        $scheduleTour = ScheduleTour::where('date','>=', $ldate)->orderBy('date')->get();
    	return view('dashboard.schedule.list', compact('scheduleTour'));
    }

    public function postCreate(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
            'product' => 'required',
            'action_date' => 'required',
        ]);
        try{
            if(!$validator->fails()){
                DB::beginTransaction();
                	$data = new ScheduleTour();
	                $data->date = date($request->action_date);
	                $data->product_id = $request->product[0];
	                $data->description = empty($request->description)?"":$request->description;
	                $data->blocked = $request->status == 'on' ? 0 : 1;
	                $data->user_id = Auth::user()->id;
	                $data->options = "{}";

	                $data->save();
                DB::commit();
               return redirect()->route('get.dashboard.product.schedule.list')->with(['flash_message'=>'Tạo mới thành công']);
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