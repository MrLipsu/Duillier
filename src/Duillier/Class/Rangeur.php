<?php

//src/Duillier/Class/Rangeur.php

//Nous créons la classe "Rangeur"
class Rangeur
{
  private $_date;
  private $_poste;
  private $_tireur;

  public function getDate(){
      return $this->_date;
  }
  public function setDate($date){
      $this->_date = $date;
  }

  public function getPoste(){
      return $this->_poste;
  }
  public function setPoste($poste){
      $this->_poste = $poste;
  }

  public function getTireur(){
      return $this->_tireur;
  }
  public function setTireur($tireur){
    $this->_tireur = $tireur;
  }

  public function __construct($date, $poste, $tireur){
      $this->_date = $date;
      $this->_poste = $Poste;
      $this->_tireur = $tireur;
  }

  public function modifierDateDunRangeur(){
      //Todo
  }

  public function verifDisponibilite(){
      //Todo
  }

  public function majDate($date){
      //Todo
  }

  public function changerDePoste(){
      //Todo
  }

  public function majPoste(){
      //Todo
  }

  public function supprimerReservation($tireur){
      //Todo
  }

  public function getRangeurs($jour){
      //Todo

      //return liste des rangeurs à tel jour
  }
}
