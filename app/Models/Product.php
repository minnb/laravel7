<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
class Product extends Model
{
    protected $table ="m_products";

    public static function getSelect2Products()
    {
    	$data = DB::table('m_products')->where([
            ['blocked', 0]
        ])->select('id', 'name')->orderBy('id')->get()->toArray();

        return $data;
    }

    public static function Top4Product($limit = 4)
    {
    	return DB::table('m_products')->where('blocked', 0)->orderBy('id', 'desc')->limit(4)->get();
    }
}