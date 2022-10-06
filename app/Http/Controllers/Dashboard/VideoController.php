<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Log; use DB;
use Auth;use Image;
use App\Models\Roles;
use App\Models\Video;
use App\Models\Categories;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function list()
    {
        $data = Video::where('blocked',0)->get();
    	return view('dashboard.videos.list', compact('data'));
    }

    public function create()
    {
        return view('dashboard.videos.create');
    }

    public function postCreate(Request $request)
    {
        try{
            DB::beginTransaction();
                $data = new Video();            
                $data->name = trim($request->name);
                $data->alias = Str::slug(trim($request->name));;
                $data->url = trim($request->url);
                $data->blocked = $request->status == 'on' ? 0 : 1;
                $data->save();            
            DB::commit();
            return redirect()->route('get.dashboard.video.list')->with(['flash_message'=>'Tạo mới thành công']);
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
            $data = Video::find($id);
            return view('dashboard.videos.edit', compact('data'));
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
                $data = Video::find($id);
                $data->name = trim($request->name);
                $data->alias = Str::slug(trim($request->name));;
                $data->url = trim($request->url);
                $data->blocked = $request->status == 'on' ? 0 : 1;
                $data->save();
            DB::commit();
            return redirect()->route('get.dashboard.video.list')->with(['flash_message'=>'Chỉnh sửa dữ liệu thành công']);
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
                DB::table('m_videos')->where('id', $id)->update(['blocked'=>1]);
            DB::commit();
            return redirect()->route('get.dashboard.video.list')->with(['flash_message'=>'Xóa thành công']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }
}
