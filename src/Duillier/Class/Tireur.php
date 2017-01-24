<?php

//src/Duillier/Class/Tireur.php

//Nous créons la classe "Tireur"
class Tireur
{
  private $_numLicence;
  private $_anneeNaissance;
  private $_estGaucher;
  private $_commentaire;
  private $_nbEssai;
  private $_numLivret;
  private $_nbRepas;
  private $_totalPayer;
  private $_repartition;
  private $_appartientGroupe;


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
