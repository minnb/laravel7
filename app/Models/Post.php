<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
class Post extends Model
{
    protected $table ="m_posts";

 	public static function Top3Post($limit = 3)
    {
    	return DB::table('m_posts')->where('blocked', 0)->orderBy('id', 'desc')->limit(3)->get();
    }
}