<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Log; use DB;
use Auth;use Image;
use App\Models\Roles;
use App\Models\Social;

class SocialController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function list()
    {
        $data = Social::get();
    	return view('dashboard.social.list', compact('data'));
    }

    public function create()
    {
        return view('dashboard.social.create');
    }

    public function postCreate(Request $request)
    {
        try{
            DB::beginTransaction();
                $data = new Social();
                
                $data->type = $request->type;
                $data->link = $request->link;
                $data->blocked = $request->status == 'on' ? 0 : 1;
                $data->save();
                
            DB::commit();
            return redirect()->route('get.dashboard.social.list')->with(['flash_message'=>'Tạo mới thành công']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }

    public function edit($id)
    {
        try
        {
            $data = Social::find($id);
            return view('dashboard.social.edit', compact('data'));
        }
        catch (\Exception $e) 
        {
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }
	
    public function postEdit(Request $request, $id)
    {
        try{
            DB::beginTransaction();
                $data = Social::find($id);
                $data->link = $request->link;
                $data->save();
                
            DB::commit();
            return redirect()->route('get.dashboard.social.list')->with(['flash_message'=>'Chỉnh sửa dữ liệu thành công']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }

    public function delete($id)
    {
        try
        {
            DB::beginTransaction();
                DB::table('m_social')->where('id', $id)->update(['blocked'=> 1]);
            DB::commit();
            return redirect()->route('get.dashboard.social.list')->with(['flash_message'=>'Xóa thành công']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }
}
