<?php

readonly class Compteur {

  public function __construct(private string $filename) { }

  public function incrementer(): void {
    $compteur = 1;
    if(file_exists($this->filename)) {
      $compteur = file_get_contents($this->filename);
      $compteur++;
    }
    file_put_contents($this->filename, $compteur);
  }

  public function nombreVues(): int {
    if(!file_exists($this->filename)) {
      return 0;
    }
    return file_get_contents($this->filename);
  }
}