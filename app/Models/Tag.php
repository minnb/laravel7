<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
class Tag extends Model
{
    protected $table ="m_tags";

    public static function getSelect2Tags(){
        $data = DB::table('m_tags')->where([
            ['blocked', 0]
        ])->select('id','name')->orderBy('id')->get()->toArray();
        return $data;
    }
    
    public static function getTagsByPostId($post_id)
    {
        $data = DB::table('m_tags')
            ->join('m_post_tag', 'm_tags.id', '=', 'm_post_tag.tag_id')
            ->select('m_tags.*', 'm_post_tag.post_id')
            ->where('m_post_tag.post_id','=', $post_id)
            ->get();

        return $data;
    }
    
    public static function getFistTagName($post_id)
    {
        $data =Tag::getTagsByPostId($post_id)->first();
        if(isset($data))
        {
            return $data->name;
        }else
        {
            return "";
        }
    }

    public static function getListTagsFromArr($post_id)
    {
        $tags = '';
        $data =Tag::getTagsByPostId($post_id);
        if(isset($data))
        {
            foreach($data as $item)
            {
                $tags = $tags.$item->name.'; ';
            }
        }
        return $tags;
    }
}