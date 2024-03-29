<?php

function getCateType()
{
    $arr = [
      '0' => 'Location',
      '1' => 'Title',
      '2' => 'Park',
      '3' => 'Pagodas',
      '4' => 'Cinema',
      '5' => 'Playground',
      '6' => 'Teambuiding',
      '7' => 'Summer Camp',
      '8' => 'Event'
    ];
    return $arr;
}

function getTypeCate()
{
	return 
	[
		'0' => 'POST',
		'1' => 'PRODUCT',
		'2' => 'PAGE'
	];
}

function getTourTime(){
    $arr = [
      'NO'=> 'Liên hệ',
      '1N' => 'Trong ngày',
      '2N1D' => '2 Ngày 1 Đêm',
      '3N2D' => '3 Ngày 2 Đêm',
      '4N3D' => '4 Ngày 3 Đêm'
    ];
    return $arr;
}

function getArrDisplay(){
    $arr = [
      'Category' => 'Category',
      'Page' => 'Page'
    ];
    return $arr;
}

function getSocial(){
    $arr = [
    	''=>'',
      'FACEBOOK' => 'Facebook',
      'GOOGLE_ANA' => 'Google Analytics',
      'GOOGLE_ADS' => 'Google Ads',
    ];
    return $arr;
}

function getStatus($status)
{
	switch ($status) 
	{
	  case 1:
	    return "<span style='color:red'>Blocked</span>";
	    break;
	  case 0:
	    return "Active";
	}
}

function getCodeAttribute($code)
{
	switch ($code) 
	{
	  case 'UOM':
	    return "Unit Of Measure";
	    break;
	  case 'COLOR':
	    return "Color";
	    break;
	  case 'SIZE':
	    return "Size";
	}
}

function randomColor($id)
{
	$color = "Green";
	switch ($id) 
	{
	  case 1:
	    $color = "Olive";
	    break;
	  case 2:
	    $color = "Maroon";
	    break;
	  case 3:
	    $color = "Purple";
	    break;
	  case 4:
	    $color = "Navy";
	    break;
	  case 5:
	    $color = "Teal";
	    break;
	  case 6:
	    $color = "LightSlateGray";
	    break;
	  case 7:
	    $color = "DarkSlateGrey";
	    break;
	  default:
	    $color = "RoyalBlue";
	}
	return $color;
}