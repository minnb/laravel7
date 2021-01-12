<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Log; use DB;
use Auth;use Image;
use App\Models\Roles;
use App\Models\Categories;
use App\Models\SysPage;
use App\Utils\HomeMucTieu;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

	public function home()
    {
        $data = SysPage::where('category','HOMEPAGE')->get();
        $muctieu = json_decode($data[0]->options);
        return view('dashboard.page.home', compact('data','muctieu'));
    }

    public function postHome(Request $request)
    {
        $HomeMucTieu = new HomeMucTieu();
        $HomeMucTieu->name1 = trim($request->muctieu_1);
        $HomeMucTieu->name2 = trim($request->muctieu_2);
        $HomeMucTieu->name3 = trim($request->muctieu_3);
        $HomeMucTieu->name4 = trim($request->muctieu_4);
        $HomeMucTieu->name5 = trim($request->muctieu_5);
        $HomeMucTieu->name6 = trim($request->muctieu_6);
        try{
            DB::beginTransaction();
                $data = SysPage::where('category','HOMEPAGE')->first();
                if($data->count() > 0)
                {
                    
                    $data->options = json_encode($HomeMucTieu);
                    $data->description = trim($request->gioithieu);
                    $data->save();
                }
                else
                {
                    $HomeMucTieu = new HomeMucTieu();
                    $new_data = new SysPage();               
                    $new_data->category = 'HOMEPAGE';
                    $new_data->name = '';
                    $new_data->alias = '';
                    $new_data->description = trim($request->gioithieu);
                    $new_data->link = '';
                    $new_data->keyword = '';
                    $new_data->blocked = 0;
                    $new_data->thumbnail = "";
                    $new_data->options = json_encode($HomeMucTieu);
                    $new_data->save();
                }
                              
                /*
                if($request->file('fileImage')){
                    foreach($request->file('fileImage') as $file ){
                        $destinationPath = path_storage('images');
                        if(isset($file)){
                            $file_name = time().randomString().'.'.$file->getClientOriginalExtension();
                            $file->move($destinationPath, $file_name);
                            $data->thumbnail = $destinationPath.'/'.$file_name;
                        }
                    }
                }else
                {
                    $data->thumbnail = "";
                }
                */
                //$data->save();
                
            DB::commit();
            return redirect()->route('get.dashboard.page.home')->with(['flash_message'=>'Lưu dữ liệu thành công']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }

    //Banner
    public function banner()
    {
        $data = SysPage::where('category', 'BANNER')->get();
        return view('dashboard.page.banner', compact('data'));
    }

    public function createBanner()
    {
        return view('dashboard.page.create');
    }

    public function postCreateBanner(Request $request)
    {
        try{
            DB::beginTransaction();
                $data = new SysPage();               
                $data->category = 'BANNER';
                $data->name = trim($request->name);
                $data->alias = Str::slug($request->name);
                $data->description = empty($request->description)?"":$request->description;
                $data->link = '';
                $data->keyword = '';
                $data->blocked = $request->status == 'on' ? 0 : 1;
                $data->options = '{}';

                if($request->file('fileImage')){
                    foreach($request->file('fileImage') as $file ){
                        $destinationPath = path_storage('images');
                        if(isset($file)){
                            $file_name = time().randomString().'.'.$file->getClientOriginalExtension();
                            $file->move($destinationPath, $file_name);
                            $data->thumbnail = $destinationPath.'/'.$file_name;
                        }
                    }
                }else
                {
                    $data->thumbnail = "";
                }

                $data->save();
                
            DB::commit();
            return redirect()->route('get.dashboard.page.banner')->with(['flash_message'=>'Tạo mới thành công']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }
    public function editBanner($id)
    {
        $data = SysPage::where([
            ['category', 'BANNER'],
            ['id', $id]])->get();
        return view('dashboard.page.banner', compact('data'));
    }

    public function postEditBanner(Request $request, $id)
    {
        try{
            DB::beginTransaction();
                $data = SysPage::find($id);               
                $data->name = trim($request->name);
                $data->alias = Str::slug($request->name);
                $data->description = empty($request->description)?"":$request->description;
                $data->link = '';
                $data->keyword = '';
                $data->blocked = $request->status == 'on' ? 0 : 1;
                $data->options = '{}';

                if($request->file('fileImage')){
                    foreach($request->file('fileImage') as $file ){
                        $destinationPath = path_storage('images');
                        if(isset($file)){
                            $file_name = time().randomString().'.'.$file->getClientOriginalExtension();
                            $file->move($destinationPath, $file_name);
                            $data->thumbnail = $destinationPath.'/'.$file_name;
                        }
                    }
                }

                $data->save();
                
            DB::commit();
            return redirect()->route('get.dashboard.page.banner')->with(['flash_message'=>'Chỉnh sửa thành công']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }
    public function deleteBanner($id)
    {
        
    }
}
