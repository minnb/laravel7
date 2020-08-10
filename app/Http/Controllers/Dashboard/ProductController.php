<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Log; use DB;
use Auth;use Image;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Post_Tag;
use App\Models\Categories;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function list()
    {
        $data = Post::orderBy('id', 'DESC')->get();
    	return view('dashboard.product.list', compact('data'));
    }

    public function create()
    {
        return view('dashboard.post.create');
    }

    public function postCreate(Request $request)
    {
        try{
            DB::beginTransaction();
                $data = new Post();
                $data->type = 0;
                $data->cate_id = implode("|",$request->category);
                $data->title = trim($request->title);
                $data->alias = Str::slug($request->title);
                $data->description = empty($request->description)?"":$request->description;
                $data->content = empty($request->content)?"":$request->content;;
                $data->blocked = $request->status == 'on' ? 0 : 1;
                $data->user_id = Auth::user()->id;
                $data->viewed = 0;
                $data->votes = 0;
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

                if(count($request->tags) > 0)
                {
                    for ($i = 0; $i < count($request->tags); $i++) {
                        DB::table('m_post_tag')->insert([
                            'post_id' => $data->id,
                            'tag_id' => $request->tags[$i]
                        ]);
                    }
                }
                
            DB::commit();
            return redirect()->route('get.dashboard.product.list')->with(['flash_message'=>'Tạo mới thành công']);
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
            $data = Post::find($id);
            return view('dashboard.product.edit', compact('data', 'id'));
        }
        catch (\Exception $e) 
        {
            return back()->withErrors($e->getMessage());
        }
    }
	
    public function postEdit(Request $request, $id)
    {
        try{
            DB::beginTransaction();
                $data = Post::find($id);
                $old_img = $data->thumbnail;
                $data->cate_id = implode("|", $request->category);
                $data->title = trim($request->title);
                $data->alias = Str::slug($request->title);
                $data->description = empty($request->description)?"":$request->description;
                $data->content = empty($request->content)?"":$request->content;;
                $data->blocked = $request->status == 'on' ? 0 : 1;
                $data->user_id = Auth::user()->id;

                if($request->file('fileImage')){
                    foreach($request->file('fileImage') as $file ){
                        $destinationPath = path_storage('images');
                        if(isset($file)){
                            $file_name = time().randomString().'.'.$file->getClientOriginalExtension();
                            $file->move($destinationPath, $file_name);
                            $data->thumbnail = $destinationPath.'/'.$file_name;
                            delete_image_no_path($old_img);
                        }
                    }
                }

                if(count($request->tags) > 0)
                {
                    DB::table('m_post_tag')->where('post_id', $id)->delete();
                    for ($i = 0; $i < count($request->tags); $i++) {
                        DB::table('m_post_tag')->insert([
                            'post_id' => $id,
                            'tag_id' => $request->tags[$i]
                        ]);
                    }
                }

                $data->save();               
            DB::commit();
            return redirect()->route('get.dashboard.product.list')->with(['flash_message'=>'Chỉnh sửa dữ liệu thành công']);
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
                DB::table('m_posts')->where('id', $id)->update(['blocked'=>1]);
            DB::commit();
            return redirect()->route('get.dashboard.product.list')->with(['flash_message'=>'Xóa thành công']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }
}
