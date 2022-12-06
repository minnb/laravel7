<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Log; use DB;
use Auth;use Image;
use App\Models\Roles;
use App\Models\Gallery;
use App\Models\Categories;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function list()
    {
        $data = Gallery::where('blocked', 0)->get();
    	return View('dashboard.gallery.list', compact('data'));
    }

    public function create()
    {
        return view('dashboard.gallery.create');
    }

    public function postCreate(Request $request)
    {
        try{
            DB::beginTransaction();
                $data = new Gallery();            
                $data->name = trim($request->name);
                $data->description = trim($request->description);
                $data->tags_id = '' ;
                $data->blocked = $request->status == 'on' ? 0 : 1;
                $data->user_id = Auth::user()->id;
                $data->save();            
            DB::commit();
            return redirect()->route('get.dashboard.gallery.list')->with(['flash_message'=>'Tạo mới thành công']);
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
            $data = Gallery::find($id);
            return view('dashboard.gallery.edit', compact('data'));
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
                $data = Gallery::find($id);
                $data->name = trim($request->name);
                $data->alias = Str::slug(trim($request->name));;
                $data->url = trim($request->url);
                $data->blocked = $request->status == 'on' ? 0 : 1;
                $data->save();
            DB::commit();
            return redirect()->route('get.dashboard.gallery.list')->with(['flash_message'=>'Chỉnh sửa dữ liệu thành công']);
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
                DB::table('m_gallery')->where('id', $id)->update(['blocked'=>1]);
            DB::commit();
            return redirect()->route('get.dashboard.gallery.list')->with(['flash_message'=>'Xóa thành công']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }
}
