<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
class Categories extends Model
{
    protected $table ="m_categories";

    public static function getMultiCategory($parent){
        return DB::select('select * from m_categories order by type');
    }
    
    public static function getParent($type)
    {
    	return Categories::where('type', $type)->first()->id;
    }
    
    public static function getCateByType($type){
        return DB::select('select * from m_categories where parent > 0 and type = '.$type.' order by name');
    }

    public static function getSelect2Category($type =''){
        $data = DB::table('m_categories')->where([
            ['blocked', 0], 
            ['parent', '>', 0], 
            ['type', '=', $type]
        ])->select('id','name')->orderBy('id')->get()->toArray();
        return $data;
    }

    public static function getCateByArr($arr_id)
    {
    	return DB::table('m_categories')->whereIn('id', $arr_id)->get();
    }

    public static function getLocationByCate($categories){
        $listCate = Categories::getCateByArr(convertStrToArr("|", $categories))->where('sort', 0)->first();
        if(isset($listCate)){
            return $listCate->name;
        }else{
            return 'Việt Nam';
        }
    }

    //get list location
    public static function getListLocation(){
        return Categories::where([
            ['blocked', 0],
            ['parent', '>', 2],
            ['sort', 0]
        ])->get();
    }

    public static function getCateBySort($sort)
    {
        return DB::table('m_categories')->where([
            ['type', 1],
            ['sort', $sort],
            ['parent', '>', 0]
        ])->inRandomOrder()->take(10)->get();
    }

    public static function getServicePage()
    {
       return Categories::where(['blocked' => 0, 'type'=> 2])->where('parent','>',0)->orderBy('id')->get();
    }
}