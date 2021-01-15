<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class HtmlStr extends Model
{
    public static function StrWord($str, $num = 150, $char){
        return Str::words($str, $num, $char);
        //return Str::words('Perfectly balanced, as all things should be.', 3, ' >>>');
    }
}