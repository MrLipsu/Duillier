<?php

namespace Duillier\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Tireur
*
* @ORM\Table(name="tireur")
* @ORM\Entity(repositoryClass="Duillier\PlanningBundle\Repository\TireurRepository")
*/
class Tireur
{


  /**
  * @var int
  *
  * @ORM\Column(name="idLicence", type="bigint", unique=true)
  * @ORM\Id
  */
  private $idLicence;

  /**
  * @var string
  *
  * @ORM\Column(name="nomGroupe", type="string", length=50, nullable=true)
  */
  private $nomGroupe;

  /**
  * @var string
  *
  * @ORM\Column(name="idClub", type="string", length=13)
  */
  private $idClub;

  /**
  * @var string
  *
  * @ORM\Column(name="nomTireur", type="string", length=50)
  */
  private $nomTireur;

  /**
  * @var string
  *
  * @ORM\Column(name="prenomTireur", type="string", length=50)
  */
  private $prenomTireur;

  /**
  * @var string
  *
  * @ORM\Column(name="anneeNaissance", type="string", length=20)
  */
  private $anneeNaissance;

  /**
  * @var bool
  *
  * @ORM\Column(name="estGaucher", type="boolean")
  */
  private $estGaucher;

  /**
  * @var string
  *
  * @ORM\Column(name="adresse", type="string", length=200, nullable=true)
  */
  private $adresse;

  /**
  * @var int
  *
  * @ORM\Column(name="codePostalTireur", type="integer", nullable=true)
  */
  private $codePostalTireur;

  /**
  * @var string
  *
  * @ORM\Column(name="ville", type="string", length=200, nullable=true)
  */
  private $ville;

  /**
  * @var string
  *
  * @ORM\Column(name="commentaire", type="string", length=1024, nullable=true)
  */
  private $commentaire;

  /**
  * @var string
  *
  * @ORM\Column(name="sexe", type="string", length=5, nullable=true)
  */
  private $sexe;

  /**
  * @var string
  *
  * @ORM\Column(name="typeLicence", type="string", length=50, nullable=true)
  */
  private $typeLicence;

  /**
  * @var string
  *
  * @ORM\Column(name="mail", type="string", length=150)
  */
  private $mail;

  /**
  * @var string
  *
  * @ORM\Column(name="mdp", type="string", length=255)
  */
  private $mdp;

  public function __construct($idLicence, $idClub, $nomTireur, $prenomTireur, $anneeNaissance, $estGaucher, $mail)
  {
    $this->idLicence = $idLicence;
    $this->idClub = $idClub;
    $this->nomTireur = $nomTireur;
    $this->prenomTireur = $prenomTireur;
    $this->anneeNaissance = $anneeNaissance;
    $this->estGaucher = $estGaucher;
    $this->mail = $mail;

  }



  /**
  * Get id
  *
  * @return integer
  */
  public function getId()
  {
    return $this->id;
  }

  /**
  * Set idLicence
  *
  * @param integer $idLicence
  *
  * @return Tireur
  */
  public function setIdLicence($idLicence)
  {
    $this->idLicence = $idLicence;

    return $this;
  }

  /**
  * Get idLicence
  *
  * @return integer
  */
  public function getIdLicence()
  {
    return $this->idLicence;
  }

  /**
  * Set nomGroupe
  *
  * @param string $nomGroupe
  *
  * @return Tireur
  */
  public function setNomGroupe($nomGroupe)
  {
    $this->nomGroupe = $nomGroupe;

    return $this;
  }

  /**
  * Get nomGroupe
  *
  * @return string
  */
  public function getNomGroupe()
  {
    return $this->nomGroupe;
  }

  /**
  * Set idClub
  *
  * @param string $idClub
  *
  * @return Tireur
  */
  public function setIdClub($idClub)
  {
    $this->idClub = $idClub;

    return $this;
  }

  /**
  * Get idClub
  *
  * @return string
  */
  public function getIdClub()
  {
    return $this->idClub;
  }

  /**
  * Set nomTireur
  *
  * @param string $nomTireur
  *
  * @return Tireur
  */
  public function setNomTireur($nomTireur)
  {
    $this->nomTireur = $nomTireur;

    return $this;
  }

  /**
  * Get nomTireur
  *
  * @return string
  */
  public function getNomTireur()
  {
    return $this->nomTireur;
  }

  /**
  * Set prenomTireur
  *
  * @param string $prenomTireur
  *
  * @return Tireur
  */
  public function setPrenomTireur($prenomTireur)
  {
    $this->prenomTireur = $prenomTireur;

    return $this;
  }

  /**
  * Get prenomTireur
  *
  * @return string
  */
  public function getPrenomTireur()
  {
    return $this->prenomTireur;
  }

  /**
  * Set anneeNaissance
  *
  * @param string $anneeNaissance
  *
  * @return Tireur
  */
  public function setAnneeNaissance($anneeNaissance)
  {
    $this->anneeNaissance = $anneeNaissance;

    return $this;
  }

  /**
  * Get anneeNaissance
  *
  * @return string
  */
  public function getAnneeNaissance()
  {
    return $this->anneeNaissance;
  }

  /**
  * Set estGaucher
  *
  * @param boolean $estGaucher
  *
  * @return Tireur
  */
  public function setEstGaucher($estGaucher)
  {
    $this->estGaucher = $estGaucher;

    return $this;
  }

  /**
  * Get estGaucher
  *
  * @return boolean
  */
  public function getEstGaucher()
  {
    return $this->estGaucher;
  }

  /**
  * Set adresse
  *
  * @param string $adresse
  *
  * @return Tireur
  */
  public function setAdresse($adresse)
  {
    $this->adresse = $adresse;

    return $this;
  }

  /**
  * Get adresse
  *
  * @return string
  */
  public function getAdresse()
  {
    return $this->adresse;
  }

  /**
  * Set codePostalTireur
  *
  * @param integer $codePostalTireur
  *
  * @return Tireur
  */
  public function setCodePostalTireur($codePostalTireur)
  {
    $this->codePostalTireur = $codePostalTireur;

    return $this;
  }

  /**
  * Get codePostalTireur
  *
  * @return integer
  */
  public function getCodePostalTireur()
  {
    return $this->codePostalTireur;
  }

  /**
  * Set ville
  *
  * @param string $ville
  *
  * @return Tireur
  */
  public function setVille($ville)
  {
    $this->ville = $ville;

    return $this;
  }

  /**
  * Get ville
  *
  * @return string
  */
  public function getVille()
  {
    return $this->ville;
  }

  /**
  * Set commentaire
  *
  * @param string $commentaire
  *
  * @return Tireur
  */
  public function setCommentaire($commentaire)
  {
    $this->commentaire = $commentaire;

    return $this;
  }

  /**
  * Get commentaire
  *
  * @return string
  */
  public function getCommentaire()
  {
    return $this->commentaire;
  }

  /**
  * Set sexe
  *
  * @param string $sexe
  *
  * @return Tireur
  */
  public function setSexe($sexe)
  {
    $this->sexe = $sexe;

    return $this;
  }

  /**
  * Get sexe
  *
  * @return string
  */
  public function getSexe()
  {
    return $this->sexe;
  }

  /**
  * Set typeLicence
  *
  * @param string $typeLicence
  *
  * @return Tireur
  */
  public function setTypeLicence($typeLicence)
  {
    $this->typeLicence = $typeLicence;

    return $this;
  }

  /**
  * Get typeLicence
  *
  * @return string
  */
  public function getTypeLicence()
  {
    return $this->typeLicence;
  }

  /**
  * Set mail
  *
  * @param string $mail
  *
  * @return Tireur
  */
  public function setMail($mail)
  {
    $this->mail = $mail;

    return $this;
  }

  /**
  * Get mail
  *
  * @return string
  */
  public function getMail()
  {
    return $this->mail;
  }

  /**
  * Set mdp
  *
  * @param string $mdp
  *
  * @return Tireur
  */
  public function setMdp($mdp)
  {
    $this->mdp = $mdp;

    return $this;
  }

  /**
  * Get mdp
  *
  * @return string
  */
  public function getMdp()
  {
    return $this->mdp;
  }
}
