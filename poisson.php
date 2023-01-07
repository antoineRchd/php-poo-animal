<?php

require_once "abstractVertebre.php";

final class Poisson extends Vertebre {
  public function seDeplacer() {
    echo "Le poisson se déplace en nageant.\n";
  }

  public function seNourrir() {
    echo "Le poisson se nourrit de plancton et de petits poissons.\n";
  }
}