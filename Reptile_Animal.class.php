<?php

class Reptile extends Animal{
  public $name;
  public $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;

    // echo "$this->name $this->age";
  }
  public function get_name() {
    return $this->name;
  }
  public function get_age() {
    return $this->age;
  }
  public function get_carapace() {
    return $this->carapace;
  }
}

class Tortue extends Reptile{
  public function display_infos() {
    echo $this->name;
    echo $this->age;
  }
}

class Dinosaure extends Reptile {

  public function display_infos() {
    echo $this->name;
    echo $this->age;
  }
}
