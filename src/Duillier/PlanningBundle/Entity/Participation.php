<?php

namespace Duillier\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 * @ORM\Table(name="participation")
 * @ORM\Entity(repositoryClass="Duillier\PlanningBundle\Repository\ParticipationRepository")
 */
class Participation
{

    /**
     * @var int
     *
     * @ORM\Column(name="idLivret", type="bigint", unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idLivret;

    /**
     * @var int
     *
     * @ORM\Column(name="idLicence", type="integer")
     */
    private $idLicence;

    /**
     * @var int
     *
     * @ORM\Column(name="nbEssai", type="integer")
     */
    private $nbEssai;

    /**
     * @var int
     *
     * @ORM\Column(name="nbRepas", type="integer")
     */
    private $nbRepas;

    /**
     * @var string
     *
     * @ORM\Column(name="montantTotal", type="decimal", precision=10, scale=0)
     */
    private $montantTotal;


    /**
     * @var int
     *
     * @ORM\Column(name="isInGroupe", type="tinyint")
     */
    private $isInGroupe;

    /**
     * @var int
     *
     * @ORM\Column(name="isChefGroupe", type="tinyint")
     */
    private $isChefGroupe;














    /**
     * Get idLivret
     *
     * @return integer
     */
    public function getIdLivret()
    {
        return $this->idLivret;
    }

    /**
     * Set idLicence
     *
     * @param integer $idLicence
     *
     * @return Participation
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
     * Set nbEssai
     *
     * @param integer $nbEssai
     *
     * @return Participation
     */
    public function setNbEssai($nbEssai)
    {
        $this->nbEssai = $nbEssai;

        return $this;
    }

    /**
     * Get nbEssai
     *
     * @return integer
     */
    public function getNbEssai()
    {
        return $this->nbEssai;
    }

    /**
     * Set nbRepas
     *
     * @param integer $nbRepas
     *
     * @return Participation
     */
    public function setNbRepas($nbRepas)
    {
        $this->nbRepas = $nbRepas;

        return $this;
    }

    /**
     * Get nbRepas
     *
     * @return integer
     */
    public function getNbRepas()
    {
        return $this->nbRepas;
    }

    /**
     * Set montantTotal
     *
     * @param string $montantTotal
     *
     * @return Participation
     */
    public function setMontantTotal($montantTotal)
    {
        $this->montantTotal = $montantTotal;

        return $this;
    }

    /**
     * Get montantTotal
     *
     * @return string
     */
    public function getMontantTotal()
    {
        return $this->montantTotal;
    }













    /**
     * Set isInGroupe
     *
     * @param integer $isInGroupe
     *
     * @return Participation
     */
    public function setIsInGroupe($isInGroupe)
    {
        $this->isInGroupe = $isInGroupe;

        return $this;
    }

    /**
     * Get isInGroupe
     *
     * @return integer
     */
    public function getIsInGroupe()
    {
        return $this->isInGroupe;
    }



    /**
     * Set isChefGroupe
     *
     * @param integer $isChefGroupe
     *
     * @return Participation
     */
    public function setIsChefGroupe($isChefGroupe)
    {
        $this->isChefGroupe = $isChefGroupe;

        return $this;
    }

    /**
     * Get isChefGroupe
     *
     * @return integer
     */
    public function getIsChefGroupe()
    {
        return $this->isChefGroupe;
    }
}
