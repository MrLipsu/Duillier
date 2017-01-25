<?php

//src/Duillier/Class/Tireur.php

//Nous créons la classe "Tireur"
class Tireur extends Personne
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



  public function getNumLicence(){
      return $this->_numLicence;
  }
  public function setNumLicence($numLicence){
      $this->_numLicence = $numLicence;
  }

  public function getAnneeNaissance(){
      return $this->_anneeNaissance;
  }
  public function setAnneeNaissance($anneeNaissance){
      $this->_anneeNaissance = $anneeNaissance;
  }

  public function getEstGaucher(){
      return $this->_estGaucher;
  }
  public function setEstGaucher($estGaucher){
      $this->_estGaucher = $estGaucher;
  }

  public function getCommentaire(){
      return $this->_commentaire;
  }
  public function setCommentaire($commentaire){
      $this->_commentaire = $commentaire;
  }

  public function getNbEssai(){
      return $this->_nbEssai;
  }
  public function setNbEssai($nbEssai){
      $this->_nbEssai = $nbEssai;
  }

  public function getNumLivret(){
      return $this->_numLivret;
  }
  public function setNumLivret($numLivret){
      $this->_numLivret = $numLivret;
  }

  public function getNbRepas(){
      return $this->_nbRepas;
  }
  public function setNbRepas($nbRepas){
      $this->_nbRepas = $nbRepas;
  }

  public function getTotalPayer(){
      return $this->_totalPayer;
  }
  public function setEstGaucher($totalPayer){
      $this->_totalPayer = $totalPayer;
  }

  public function getRepartition(){
      return $this->_repartition;
  }
  public function setRepartition($repartition){
      $this->_repartition = $repartition;
  }

  public function getAppartientGroupe(){
      return $this->_appartientGroupe;
  }
  public function setAppartientGroupe($appartientGroupe){
      $this->_appartientGroupe = $appartientGroupe;
  }

  //Constructeur
  public function __construct($nom, $prenom, $adresse, $ville, $codePostal, $email,$numLicence, $anneeNaissance, $estGaucher, $commentaire, $nbEssai, $numLivret, $nbRepas, $totalPayer, $repartition, $appartientGroupe)
  {
      super($nom, $prenom, $adresse, $ville, $codePostal, $email);
      $this->_numLicence = $numLicence;
      $this->_anneeNaissance = $anneeNaissance;
      $this->_estGaucher = $estGaucher;
      $this->_commentaire = $commentaire;
      $this->_nbEssai = $nbEssai;
      $this->_numLivret = $numLivret;
      $this->_nbRepas = $nbRepas;
      $this->_totalPayer = $totalPayer;
      $this->_repartition = $repartition;
      $this->_appartientGroupe = $appartientGroupe;
  }

  //methodes
  public function rechercherTireur($nom, $prenom){
      //Todo
  }

  public function selectionneTireur(){
      //Todo

  }

  public function modifInfo(){
      //Todo
  }

  public function inscription($nom, $prenom, $mail, $adresse, $nbRepas){
      //Todo
  }

  public function calculerMontant(){
      //Todo
  }

  public function modifierEtat(){
      //Todo

  }

}
