<?php

class Oiseau extends Animal{
  public $name;
  public $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }
  public function get_name() {
    return $this->name;
  }
  public function get_age() {
    return $this->age;
  }
}

class Faucon extends Oiseau{

  public function display_infos() {
    echo $this->name;
    echo $this->age;
  }
}

class Aigle extends Oiseau{

  public function display_infos() {
    echo $this->name;
    echo $this->age;
  }
}
