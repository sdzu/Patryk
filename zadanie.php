<?php
class Drzwi {
  public $wysokosc = 200;
  public $szerokosc = 80;
  public $czyZamkniete = true;
  public function otworz() {
    $this->czyZamkniete = false;
  }
  public function zamknij() {
    $this->czyZamkniete = true;
  }
  public function sprawdzCzyZamkniete() {
    return $this->czyZamkniete;
  }
}
