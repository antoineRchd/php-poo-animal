<?php

require_once "abstractVertebre.php";

class Singe extends Vertebre {
  public function seDeplacer() {
    echo "Le singe se déplace en sautant et en marchant.\n";
  }

  public function seNourrir() {
    echo "Le singe se nourrit de fruits et de noix.\n";
  }
}