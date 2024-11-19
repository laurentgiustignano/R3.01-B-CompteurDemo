<?php

require_once 'Compteur.php';

readonly class DoubleCompteur extends Compteur {

  public function nombreVues(): int {
    return parent::nombreVues() * 2;
  }
}