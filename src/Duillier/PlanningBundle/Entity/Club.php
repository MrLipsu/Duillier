<?php

namespace Duillier\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity(repositoryClass="Duillier\PlanningBundle\Repository\ClubRepository")
 */
class Club
{
    /**
     * @var string
     *
     * @ORM\Column(name="idClub", type="string", length=13, unique=true)
     * @ORM\id
     */
    private $idClub;

    /**
     * @var string
     *
     * @ORM\Column(name="canton", type="string", length=2)
     */
    private $canton;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPresident", type="string", length=50)
     */
    private $nomPresident;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomPresident", type="string", length=50, nullable=true)
     */
    private $prenomPresident;

    /**
     * @var string
     *
     * @ORM\Column(name="adressePresident", type="string", length=200, nullable=true)
     */
    private $adressePresident;

    /**
     * @var int
     *
     * @ORM\Column(name="codePostal", type="integer", nullable=true)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="numCCP", type="string", length=100, nullable=true)
     */
    private $numCCP;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleCCP", type="string", length=300, nullable=true)
     */
    private $libelleCCP;

    /**
     * @var string
     *
     * @ORM\Column(name="iban", type="string", length=50, nullable=true)
     */
    private $iban;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idClub
     *
     * @param string $idClub
     *
     * @return Club
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
     * Set canton
     *
     * @param string $canton
     *
     * @return Club
     */
    public function setCanton($canton)
    {
        $this->canton = $canton;

        return $this;
    }

    /**
     * Get canton
     *
     * @return string
     */
    public function getCanton()
    {
        return $this->canton;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Club
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nomPresident
     *
     * @param string $nomPresident
     *
     * @return Club
     */
    public function setNomPresident($nomPresident)
    {
        $this->nomPresident = $nomPresident;

        return $this;
    }

    /**
     * Get nomPresident
     *
     * @return string
     */
    public function getNomPresident()
    {
        return $this->nomPresident;
    }

    /**
     * Set prenomPresident
     *
     * @param string $prenomPresident
     *
     * @return Club
     */
    public function setPrenomPresident($prenomPresident)
    {
        $this->prenomPresident = $prenomPresident;

        return $this;
    }

    /**
     * Get prenomPresident
     *
     * @return string
     */
    public function getPrenomPresident()
    {
        return $this->prenomPresident;
    }

    /**
     * Set adressePresident
     *
     * @param string $adressePresident
     *
     * @return Club
     */
    public function setAdressePresident($adressePresident)
    {
        $this->adressePresident = $adressePresident;

        return $this;
    }

    /**
     * Get adressePresident
     *
     * @return string
     */
    public function getAdressePresident()
    {
        return $this->adressePresident;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     *
     * @return Club
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return int
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Club
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
     * Set email
     *
     * @param string $email
     *
     * @return Club
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set numCCP
     *
     * @param string $numCCP
     *
     * @return Club
     */
    public function setNumCCP($numCCP)
    {
        $this->numCCP = $numCCP;

        return $this;
    }

    /**
     * Get numCCP
     *
     * @return string
     */
    public function getNumCCP()
    {
        return $this->numCCP;
    }

    /**
     * Set libelleCCP
     *
     * @param string $libelleCCP
     *
     * @return Club
     */
    public function setLibelleCCP($libelleCCP)
    {
        $this->libelleCCP = $libelleCCP;

        return $this;
    }

    /**
     * Get libelleCCP
     *
     * @return string
     */
    public function getLibelleCCP()
    {
        return $this->libelleCCP;
    }

    /**
     * Set iban
     *
     * @param string $iban
     *
     * @return Club
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }
}
