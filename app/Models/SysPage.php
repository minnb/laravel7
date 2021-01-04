<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
class SysPage extends Model
{
    protected $table ="sys_pages";

    public static function getSlideIndex(){
    	$data = DB::table('sys_pages')->where('category','BANNER')->orderBy('id','desc')->limit(5)->get();
    	return $data;
    }
}