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

    public static function getProductByAlias($alias, $limit = 3)
    {
        return DB::table('m_products')
            ->join('m_categories', 'm_categories.id', '=', 'm_products.categories')
            ->where('m_categories.alias','=', $alias)
            ->where('m_products.description','!=','')
            ->select('m_products.*')->orderBy('m_products.created_at', 'desc')->limit($limit)->get();
    }

    public static function getProductByTagAlias($alias, $limit = 3)
    {
        return DB::table('m_products')
            ->join('m_categories', 'm_categories.id', '=', 'm_products.categories')
            ->join('m_post_tag', 'm_post_tag.post_id', '=', 'm_products.id')
            ->join('m_tags', 'm_tags.id', '=', 'm_post_tag.tag_id')
            ->where('m_tags.alias','=', $alias)
            ->select('m_categories.alias as cate_alias', 'm_products.*')->orderBy('m_products.created_at', 'desc')->limit($limit)->get();
    }
}