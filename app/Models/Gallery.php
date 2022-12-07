<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use DB;
use File;

class Gallery extends Model
{
	protected $table ="m_gallery";

	public static function getFirstSubDir($path)
	{
		$dir = public_path($path);
		try
		{
			$directories = [];
		    $items = scandir($dir);

		    foreach ($items as $item) {
		        if($item == '..' || $item == '.')
		            continue;
		        if(is_dir($path.'/'.$item))
		            $directories[] = $item;
		    }

		    $rand_key = array_rand($directories, 1);

		    return $directories[$rand_key];
		}
		catch (\Exception $e) 
		{
			return null;
		}
	}

	public static function getImageFromPublicFolder($number)
	{
		$result = [];
		try
		{
			$path = 'storage/images';
			$folder = Gallery::getFirstSubDir($path);
			
			if(empty($folder))
			{
				return null;
			}

			$dir = public_path($path .'/'.$folder);

			$files = preg_grep('~\.(jpeg|jpg|png)$~', scandir($dir, SCANDIR_SORT_DESCENDING));		
			$rand_key = array_rand($files, $number);

			foreach($rand_key as $i)
			{
	    		array_push($result, asset($path).'/'.$folder. '/' . $files[$i]);
			}

			return $result;
		}
		catch (\Exception $e) 
		{
			return null;
		}
	}


}
