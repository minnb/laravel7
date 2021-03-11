<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;

class ScheduleTour extends Model
{
    protected $table ="m_schedule";

    public static function getScheduleByTourId($id){
    	$ldate = date('Y-m-d');
    	$data = ScheduleTour::where([
    			['product_id', $id],
    			['date', '>=', $ldate]
    			])->orderBy('date')->first();
    	if(isset($data)){
    		return $data->date;
    	}else{
    		return "1990-01-01";
    	}
    }

}