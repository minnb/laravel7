<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;

class ImageSingle extends Model
{
	protected $table ="m_images";

	public static function getPathImage($post_id)
    {
        $data = ImageSingle::where('post_id', $post_id)->first();
        return isset($data) ? $data->path : "";
    } 
}