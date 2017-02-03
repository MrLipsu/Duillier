<?php

//src/Duillier/Class/Poste.php

//Nous créons la classe "Poste"
class Poste
{
  private $_numeroDePoste;

  public function getNumeroDePoste()
  {
      return $this->_numeroDePoste;
  }

  public function setNumeroDePoste($numeroPoste)
  {
      $this->_numeroDePoste = $numeroPoste;
  }

  public function __construct($numeroPoste)
  {
      $this->_numeroDePoste = $numeroPoste;
  }
}
