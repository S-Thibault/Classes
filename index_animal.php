<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
  require 'Animal.class.php';
  require 'Oiseau_Animal.class.php';
  require 'Reptile_Animal.class.php';

(new Animal())->respire();

$AcerLeFaucon = new Faucon('Acer', 2);
echo $AcerLeFaucon->display_infos() . "" . 'ans est un Faucon';
echo "<br>";
  $AtomLAigle = new Aigle('Atom','1500');
  echo $AtomLAigle->display_infos() . "" . 'ans est un Aigle';
  echo "<br>";
    $RobertLaTortue = new Tortue('Robert','145');
    echo $RobertLaTortue->display_infos() . "" . 'ans est une Tortue';
    echo "<br>";
      $BobLeDino = new Dinosaure('Bob','25');
      echo $BobLeDino->display_infos() . "" . 'ans est un Dinosaure';

?>



  </body>
</html>
