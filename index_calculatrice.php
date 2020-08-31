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

  public function addition(){
    echo $this->a + $this->b;
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

$cal1 = new Calculatrice(10,5);
$cal1->addition();
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
