<?php

namespace Duillier\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Occupe
 *
 * @ORM\Table(name="occupe")
 * @ORM\Entity(repositoryClass="Duillier\PlanningBundle\Repository\OccupeRepository")
 */
class Occupe
{
    /**
     * @var int
     *
     * @ORM\Column(name="idOccupe", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idOccupe;

    /**
     * @var int
     *
     * @ORM\Column(name="idPoste", type="integer")
     */
    private $idPoste;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="idHoraire", type="integer")
     */
    private $idHoraire;

    /**
     * @var int
     *
     * @ORM\Column(name="numLivret", type="integer")
     */
    private $numLivret;


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
     * Set idPoste
     *
     * @param integer $idPoste
     *
     * @return Occupe
     */
    public function setIdPoste($idPoste)
    {
        $this->idPoste = $idPoste;

        return $this;
    }

    /**
     * Get idPoste
     *
     * @return integer
     */
    public function getIdPoste()
    {
        return $this->idPoste;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Occupe
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idHoraire
     *
     * @param integer $idHoraire
     *
     * @return Occupe
     */
    public function setIdHoraire($idHoraire)
    {
        $this->idHoraire = $idHoraire;

        return $this;
    }

    /**
     * Get idHoraire
     *
     * @return integer
     */
    public function getIdHoraire()
    {
        return $this->idHoraire;
    }

    /**
     * Set numLivret
     *
     * @param integer $numLivret
     *
     * @return Occupe
     */
    public function setNumLivret($numLivret)
    {
        $this->numLivret = $numLivret;

        return $this;
    }

    /**
     * Get numLivret
     *
     * @return integer
     */
    public function getNumLivret()
    {
        return $this->numLivret;
    }
}
