<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
use File;

class Gallery extends Model
{
	protected $table ="m_gallery";

	public static function getImageFromPublicFolder($number)
	{
		$result = [];
		try
		{
			$path = 'storage/images/' . date("Ym");
			$dir = public_path($path);

			$files = preg_grep('~\.(jpeg|jpg|png)$~', scandir($dir, SCANDIR_SORT_DESCENDING));		
			$rand_key = array_rand($files, $number);

			foreach($rand_key as $i)
			{
	    		array_push($result, asset($path) . '/' . $files[$i]);
			}

			return $result;
		}
		catch (\Exception $e) 
		{
			return null;
		}
	}


}
