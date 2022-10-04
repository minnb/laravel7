<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Log; use DB;
use Auth;use Image;
use App\Models\Roles;
use App\Models\Teams;
use App\Models\Categories;

class TeamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function list()
    {
        $data = Teams::where('blocked',0)->get();
    	return view('dashboard.teams.list', compact('data'));
    }

    public function create()
    {
        return view('dashboard.teams.create');
    }

    public function postCreate(Request $request)
    {
        try{
            DB::beginTransaction();
                $data = new Teams();            
                $data->name = trim($request->name);
                $data->position = trim($request->position);
                $data->email = trim($request->email);
                $data->experience = empty($request->experience)?"":$request->experience;
                $data->blocked = $request->status == 'on' ? 0 : 1;
                if($request->file('fileImage')){
                    foreach($request->file('fileImage') as $file ){
                        $destinationPath = path_storage('images');
                        if(isset($file)){
                            $file_name = time().randomString().'.'.$file->getClientOriginalExtension();
                            $file->move($destinationPath, $file_name);
                            $data->image = $destinationPath.'/'.$file_name;
                        }
                    }
                }else
                {
                    $data->image = "";
                }
                $data->save();            
            DB::commit();
            return redirect()->route('get.dashboard.teams.list')->with(['flash_message'=>'Tạo mới thành công']);
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
            $data = Teams::find($id);
            return view('dashboard.teams.edit', compact('data'));
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
                $data = Teams::find($id);
                $old_img = $data->thumbnail;
                $data->name = trim($request->name);
                $data->position = trim($request->position);
                $data->email = trim($request->email);
                $data->experience = empty($request->experience)?"":$request->experience;
                $data->blocked = $request->status == 'on' ? 0 : 1;
                if($request->file('fileImage')){
                    foreach($request->file('fileImage') as $file ){
                        $destinationPath = path_storage('images');
                        if(isset($file)){
                            $file_name = time().randomString().'.'.$file->getClientOriginalExtension();
                            $file->move($destinationPath, $file_name);
                            $data->image = $destinationPath.'/'.$file_name;
                            delete_image_no_path($old_img);
                        }
                    }
                }

                $data->save();
                
            DB::commit();
            return redirect()->route('get.dashboard.teams.list')->with(['flash_message'=>'Chỉnh sửa dữ liệu thành công']);
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
                DB::table('m_contact')->where('id', $id)->update(['blocked'=>1]);
            DB::commit();
            return redirect()->route('get.dashboard.teams.list')->with(['flash_message'=>'Xóa thành công']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }
}
