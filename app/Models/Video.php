<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
class Video extends Model
{
    protected $table ="m_videos";

 	public static function GetRandomVideo()
    {
    	return DB::table('m_videos')->where('blocked', 0)->inRandomOrder()->first();
    }
}