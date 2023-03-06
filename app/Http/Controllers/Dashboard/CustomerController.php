<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Log; use DB;
use Auth;use Image;
use App\Models\Roles;
use App\Models\Contact;
use App\Models\Categories;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function list()
    {
        $data = Contact::whereIn('type', ['REVIEW','CONTACT'])->get();
    	return view('dashboard.cust.list', compact('data'));
    }

    public function create()
    {
        return view('dashboard.cust.create');
    }

    public function postCreate(Request $request)
    {
        try
        {
            DB::beginTransaction();
                $data = new Contact();            
                $data->type = "REVIEW";
                $data->name = trim($request->name);
                $data->phone = trim($request->phone);
                $data->email = trim($request->email);
                $data->content = empty($request->description)?"":$request->description;
                $data->flag = 0;
                $data->blocked = $request->status == 'on' ? 0 : 1;
                $data->options = '{}';

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
            return redirect()->route('get.dashboard.customer.list')->with(['flash_message'=>'Tạo mới thành công']);
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
            $data = Contact::find($id);
            return view('dashboard.cust.edit', compact('data'));
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
                $data = Contact::find($id);
                $old_img = $data->thumbnail;

                $data->name = trim($request->name);
                $data->phone = trim($request->phone);
                $data->email = trim($request->email);
                $data->content = empty($request->description)?"":$request->description;
                $data->flag = 0;
                $data->blocked = $request->status == 'on' ? 0 : 1;
                $data->options = '{}';

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
            return redirect()->route('get.dashboard.customer.list')->with(['flash_message'=>'Chỉnh sửa dữ liệu thành công']);
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
            return redirect()->route('get.dashboard.customer.list')->with(['flash_message'=>'Xóa thành công']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }
}
