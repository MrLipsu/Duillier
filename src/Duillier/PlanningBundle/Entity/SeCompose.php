<?php

namespace Duillier\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SeCompose
 *
 * @ORM\Table(name="secompose")
 * @ORM\Entity(repositoryClass="Duillier\PlanningBundle\Repository\SeComposeRepository")
 */
class SeCompose
{
    /**
     * @var int
     *
     * @ORM\Column(name="idSeCompose", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idSeCompose;

    /**
     * @var int
     *
     * @ORM\Column(name="idTir", type="integer")
     */
    private $idTir;

    /**
     * @var int
     *
     * @ORM\Column(name="idLivret", type="integer")
     */
    private $idLivret;



    public function __construct($idTir, $idLivret){

      $this->idTir = $idTir;
      $this->idLivret = $idLivret;
    }






    /**
     * Get idSeCompose
     *
     * @return integer
     */
    public function getIdSeCompose()
    {
        return $this->idSeCompose;
    }

    /**
     * Set idTir
     *
     * @param integer $idTir
     *
     * @return SeCompose
     */
    public function setIdTir($idTir)
    {
        $this->idTir = $idTir;

        return $this;
    }

    /**
     * Get idTir
     *
     * @return integer
     */
    public function getIdTir()
    {
        return $this->idTir;
    }

    /**
     * Set idLivret
     *
     * @param integer $idLivret
     *
     * @return SeCompose
     */
    public function setIdLivret($idLivret)
    {
        $this->idLivret = $idLivret;

        return $this;
    }

    /**
     * Get idLivret
     *
     * @return integer
     */
    public function getIdLivret()
    {
        return $this->idLivret;
    }
}
