<?php
namespace App\Services;
use App\Models\Product;
use App\Models\Categories;

class ProductService
{
	public function getCategory()
	{
		return Categories::where('blocked', 0)->get();
	}

    public function getAllProduct()
    {
        return Product::where('blocked', 0)->get();
    }

}