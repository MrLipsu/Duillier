<?php

namespace Duillier\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horaire
 *
 * @ORM\Table(name="horaire")
 * @ORM\Entity(repositoryClass="Duillier\PlanningBundle\Repository\HoraireRepository")
 */
class Horaire
{


    /**
     * @var int
     *
     * @ORM\Column(name="idHoraire", type="bigint", unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idHoraire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="heure", type="string", length=50)
     */
    private $heure;





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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Horaire
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
     * Set heure
     *
     * @param string $heure
     *
     * @return Horaire
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return string
     */
    public function getHeure()
    {
        return $this->heure;
    }
}
