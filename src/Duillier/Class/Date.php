<?php

//src/Duillier/Class/Date.php

//Nous créons la classe "Date"
class Date
{
  private $_heure;
  private $_minute;
  private $_jour;

  public function getHeure()
  {
      return $this->_heure;
  }

  public function setHeure($heure)
  {
      $this->_heure = $heure;
  }

  public function getMinute()
  {
      return $this->_minute;
  }

  public function setMinute($minute)
  {
      $this->_minute = $minute;
  }

  public function getJour()
  {
      return $this->_jour;
  }

  public function setJour($jour)
  {
      $this->_jour = $jour;
  }

  public function __construct($heure, $minute, $jour)
  {
      $this->_heure = $heure;
      $this->_minute = $minute;
      $this->_jour = $jour;
  }
}
