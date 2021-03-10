<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
class Post_Tag extends Model
{
    protected $table ="m_post_tag";

    public static function getArrTags($post_id)
    {
    	$arr = [];
    	$tags = DB::table("m_post_tag")->where('post_id', $post_id)->select('tag_id as id')->get();
    	foreach($tags as $item)
    	{
    		array_push($arr, $item->id);
    	}
    	return $arr;
    }

    public static function getTagByPostId($post_id)
    {
        return DB::table('m_post_tag')
            ->join('m_tags', 'm_post_tag.tag_id', '=', 'm_tags.id')
            ->where('m_post_tag.post_id', '=', $post_id)
            ->select('m_tags.id', 'm_tags.name', 'm_tags.alias')
            ->get();

        //return DB::table("m_post_tag")->where('post_id', $post_id)->get();
    }
 
}