<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
class SysPage extends Model
{
    protected $table ="sys_pages";

    public static function getSlideIndex($limit = 5)
    {
    	$data = DB::table('sys_pages')->where('blocked', 0)->where('category','BANNER')->inRandomOrder()->orderBy('id','desc')->limit($limit)->get();
    	return $data;
    }
}