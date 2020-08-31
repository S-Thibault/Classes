<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Film</title>
  </head>
  <body>

<?php
class Film {
  public $id;
  public $nom;
  public $realisateur;
  public $annee;

  function __construct($id, $nom, $realisateur, $annee) {
  $this->id = $id;
  $this->nom = $nom;
  $this->realisateur = $realisateur;
  $this->annee = $annee;
  }
  function get_id() {
    return $this->id;
  }
  function get_nom() {
    return $this->nom;
  }
  function get_realisateur() {
    return $this->realisateur;
  }
  function get_annee() {
    return $this->annee;
  }
}

$robocop = new Film("1", "Robocop", "Paul Verhoeven", "1988");
echo $robocop->get_id();
echo "<br>";
echo $robocop->get_nom();
echo "<br>";
echo $robocop->get_realisateur();
echo "<br>";
echo $robocop->get_annee();
?>

  </body>
</html>
