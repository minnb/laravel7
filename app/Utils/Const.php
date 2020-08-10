<?php

function getArrDisplay(){
    $arr = [
      'Category' => 'Category',
      'Page' => 'Page'
    ];
    return $arr;
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