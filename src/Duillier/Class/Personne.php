<?php

//src/Duillier/Class/Personne.php

//Nous créons la classe "Personne"
class Personne
{
  private $_nom;
  private $_prenom;
  private $_adresse;
  private $_ville;
  private $_codePostal;
  private $_email;


  public function getNom(){
      return $this->_nom;
  }
  public function setNom($Nom){
      $this->_nom = $nom;
  }

  public function getPrenom(){
      return $this->_prenom;
  }
  public function setPrenom($prenom){
      $this->_prenom = $prenom;
  }

  public function getAdresse(){
      return $this->_adresse;
  }
  public function setAdresse($adresse){
      $this->_adresse = $adresse;
  }

  public function getVille(){
      return $this->_ville;
  }
  public function setVille($ville){
      $this->_ville = $ville;
  }

  public function getCodePostal(){
      return $this->_codePostal;
  }
  public function setCodePostal($codePostal){
      $this->_codePostal = $codePostal;
  }

  public function getEmail(){
      return $this->_email;
  }
  public function setNom($Nom){
      $this->_nom = $nom;
  }

  public function __construct($nom,$prenom, $adresse, $ville, $codePostal, $email)
  {
      $this->_nom = $nom;
      $this->_prenom = $prenom;
      $this->_adresse = $adresse;
      $this->_ville = $ville;
      $this->_codePostal = $codePostal;
      $this->_email = $email;
  }
}
