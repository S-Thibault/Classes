<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
class Calculatrice {
  private $a;
  private $b;

function __construct($a, $b){
  $this->a = $a;
  $this->b = $b;
}

  public static function addition($a, $b){
    echo $a + $b;
  }
  public function soustraction(){
    echo $this->a - $this->b;
  }
  public function division(){
    echo $this->a / $this->b;
  }
  public function multiplication(){
    echo $this->a * $this->b;
  }

}

Calculatrice::addition(10,5);
echo "<br>";

$cal2 = new Calculatrice(10,5);
$cal2->soustraction();
echo "<br>";
$cal3 = new Calculatrice(10,5);
$cal3->division();
echo "<br>";
$cal4 = new Calculatrice(10,5);
$cal4->multiplication();

?>

  </body>
</html>
