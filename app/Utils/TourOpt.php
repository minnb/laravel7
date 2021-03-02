<?php
namespace App\Utils;
class TourOpt {
  // Properties
  public $experience;
  public $service;
  public $policy;
  public $rules;
  public $other;
  // Methods
  function set_experience($name) {
    $this->experience = $name;
  }
  
  function set_service($name) {
    $this->service = $name;
  }
  
  function set_policy($name) {
    $this->policy = $name;
  }
  
  function set_rules($name) {
    $this->rules = $name;
  }
  
  function set_other($name) {
    $this->other = $name;
  }
}
