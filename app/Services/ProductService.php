<?php
namespace App\Services;
use App\Models\Product;
use App\Models\Categories;
use App\Models\SysPage;
use Illuminate\Support\Facades\DB;

class ProductService
{
	public function getTagsProducts()
	{
		$results = DB::table('m_post_tag as pt')
			    ->join('m_tags as t', 'pt.tag_id', '=', 't.id')
			    ->join('m_products as p', 'pt.post_id', '=', 'p.id')
			    ->join('m_categories as c', 'p.categories', '=', 'c.id')
			    ->select('t.id as tag_id', 't.name as tag_name', 'p.id as product_id', 'p.name as product_name','p.categories as cate_id','p.alias as product_alias','p.alias as product_alias', 'c.alias as cate_alias')
			    ->get();
		return $results;
	}

	public function getCategory()
	{
		return Categories::where('blocked', 0)->get();
	}

    public function getAllProduct()
    {
        return Product::where('blocked', 0)->get();
    }

}