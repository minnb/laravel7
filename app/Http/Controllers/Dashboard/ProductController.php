<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Log; use DB;
use Auth;
//use Image;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Post_Tag;
use App\Models\Categories;
use App\Models\Product_Attributes;
use App\Utils\TourOpt;
use App\Models\ImageSingle;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function list()
    {
        $data = Product::orderBy('id', 'DESC')->get();
    	return view('dashboard.product.list', compact('data'));
    }

    public function create()
    {
        return view('dashboard.product.create');
    }

    public function postCreate(Request $request)
    {
        $tourOpt = new TourOpt();
        $tourOpt->experience = empty($request->experience)?"":$request->experience;
        $tourOpt->service = empty($request->tour_service)?"":$request->tour_service;
        $tourOpt->policy = empty($request->tour_policy)?"":$request->tour_policy;
        $tourOpt->rules = empty($request->rules)?"":$request->rules;

        try{
            DB::beginTransaction();
                $data = new Product();
                $data->sku = '';
                $data->categories = implode("|",$request->category);
                $data->name = trim($request->name);
                $data->alias = Str::slug($request->name);
                $data->base_unit = $request->base_unit;
                $data->description = empty($request->description)?"":$request->description;
                $data->content = empty($request->content)?"":$request->content;
                $data->blocked = $request->status == 'on' ? 0 : 1;
                $data->user_id = Auth::user()->id;
                $data->tax = '';
                $data->base_unit = $request->base_unit;
                $data->unit_price = $request->unit_price;
                $data->options = json_encode($tourOpt);
                
                $destinationPath = path_storage('images');
                if($request->file('fileImage')){
                    foreach($request->file('fileImage') as $file ){
                        if(isset($file))
                        {
                            $file_name = $this->resizeFileImage($file, $destinationPath, 600, 800);
                            //$file_name = time().randomString().'.'.$file->getClientOriginalExtension();
                            //$file->move($destinationPath, $file_name);
                            $data->thumbnail = $destinationPath.'/'.$file_name;
                        }
                    }
                }
                else
                {
                    $data->thumbnail = "";
                }

                $data->save();
                
                DB::table("m_products")->where('id', $data->id)->update(['sku'=>str_pad(strval($data->id),8,"0",STR_PAD_LEFT)]);           
                if($request->file('fileImage2')){
                    foreach($request->file('fileImage2') as $file2 ){
                        
                        if(isset($file2)){
                            $file_name2 = time().randomString().'.'.$file2->getClientOriginalExtension();
                            $file2->move($destinationPath, $file_name2);
                            
                            $imgSingle = new ImageSingle();
                            $imgSingle->post_id = $data->id;
                            $imgSingle->path = $destinationPath.'/'.$file_name2;
                            $imgSingle->save();
                        }
                    }
                }

                //tag
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
            $data = Product::find($id);

            $tourPolicy = new TourOpt();
            if($data->options != '{}' || empty($data->options))
            {
                $tourPolicy = json_decode($data->options);
            }
            return view('dashboard.product.edit', compact('data', 'id', 'tourPolicy'));
        }
        catch (\Exception $e) 
        {
            return back()->withErrors($e->getMessage());
        }
    }
	
    public function postEdit(Request $request, $id)
    {
        try
        {
            DB::beginTransaction();
            $data = Product::find($id);
            $data->categories = implode("|",$request->category);
            $data->name = trim($request->name);
            $data->alias = Str::slug($request->name);
            $data->base_unit = $request->base_unit;
            $data->unit_price = $request->unit_price;
            $data->description = empty($request->description)?"":$request->description;
            $data->content = empty($request->content)?"":$request->content;;
            $data->blocked = $request->status == 'on' ? 0 : 1;
            $data->user_id = Auth::user()->id;
            
            $tourOpt = new TourOpt();
            $tourOpt->experience = empty($request->experience)?"":$request->experience;
            $tourOpt->service = empty($request->tour_service)?"":$request->tour_service;
            $tourOpt->policy = empty($request->tour_policy)?"":$request->tour_policy;
            $tourOpt->rules = empty($request->rules)?"":$request->rules;
            $data->options = json_encode($tourOpt);

            $destinationPath = path_storage('images');
            if($request->file('fileImage'))
            {
                $old_img = $data->thumbnail;
                foreach($request->file('fileImage') as $file)
                {
                    if(isset($file))
                    {
                        $file_name = $this->resizeFileImage($file, $destinationPath, 600, 800);
                        //$file->move($destinationPath, $file_name);
                        $data->thumbnail = $destinationPath.'/'.$file_name;
                        delete_image_no_path($old_img);
                    }
                }
            }

            if($request->file('fileImage2')){
                foreach($request->file('fileImage2') as $file2 ){
                    if(isset($file2)){
                        $file_name2 = time().randomString().'.'.$file2->getClientOriginalExtension();
                        $imgSingle = ImageSingle::where('post_id', $id)->first();
                        if(isset($imgSingle))
                        {
                            $file2->move($destinationPath, $file_name2);                        
                            $imgSingle->path = $destinationPath.'/'.$file_name2;
                            $imgSingle->save();
                        }
                        else
                        {
                            $imgSingle = new ImageSingle();
                            $imgSingle->post_id = $id;
                            $imgSingle->path = $destinationPath.'/'.$file_name2;
                            $imgSingle->save();
                        }

                    }
                }
            }

            if(isset($request->tags) && count($request->tags) > 0)
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
                DB::table('m_products')->where('id', $id)->update(['blocked'=> 1]);
            DB::commit();
            return redirect()->route('get.dashboard.product.list')->with(['flash_message'=>'Xóa thành công']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }

    private function resizeFileImage($file, $destinationPath, $fixedHeight, $fixedWidth)
    {
        $file_name = time().randomString().'.'.$file->getClientOriginalExtension();                    
        $img = Image::make($file->getRealPath());
        if ($img->height() < $fixedHeight) 
        {
            $background = Image::canvas($fixedWidth, $fixedHeight, '#ffffff');
            $img->resize($fixedWidth, $fixedHeight, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $background->insert($img, 'center');
            $background->save($destinationPath . '/' . $file_name);
        }
        else
        {
            $img->resize(null, $fixedHeight, function ($constraint) {
                $constraint->aspectRatio();
            })->crop($fixedWidth, $fixedHeight);
            
            $img->save($destinationPath . '/' . $file_name);
        }

        return $file_name;
    }
}
