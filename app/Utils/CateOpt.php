<?php
namespace App\Utils;
class CateOpt {
  // Properties
  public $province;
  public $region;
  public $country;
  public $des;
  public $thumbnail;
  // Methods
  function set_location($name) {
    $this->location = $name;
  }
  
  function set_region($name) {
    $this->region = $name;
  }
  
  function set_country($name) {
    $this->country = $name;
  }
  
  function set_name4($name) {
    $this->des = $name;
  }
  
  function set_thumbnail($name) {
    $this->thumbnail = $name;
  }
  

}
