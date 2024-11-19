<?php

require_once 'Compteur.php';

readonly class DoubleCompteur extends Compteur {

  public function nombreVues(): int {
    if(!file_exists($this->filename)) {
      return 0;
    }
    return 2 * (int) file_get_contents($this->filename);
  }
}