<?php
include_once("../database/config.php");
class Location extends Modele{
 private $idVoiture,$idLoc,$idClient,$nbJour,$dateLoc;
 public function__construct( $idVoiture,$idLoc,$idClient,$nbJour,$dateLoc)
 {
    $this->idVoiture=$idVoiture;
    $this->idLoc=$idLoc;
    $this->idClient=$idClient;
    $this->nbJour=$nbJour;
    $this->dateLoc=$dateLoc;
 }
 public function getIdVoiture()
 {
    return $this->idVoiture;
    }
    public function getIdLoc()
    {
        return $this->idLoc;
    }
    public function getIdClient()
    {
        return $this->idClient;
    }
    public function getNbJour()
    {
        return $this->nbJour;
    }
    public function getDateLoc()
    {
        return $this->dateLoc;
    }
    public function setIdVoiture($idVoiture)
    {
        $this->idVoiture=$idVoiture;
    }
    public function setIdLoc($idLoc)
    {
        $this->idLoc=$idLoc;
    }
    public function setIdClient($idClient)
    {
        $this->idClient=$idClient;
    }
    public function setNbJour($nbJour)
    {
        $this->nbJour=$nbJour;
    }
    public function setDateLoc($dateLoc)
    {
        $this->dateLoc=$dateLoc;
    }
}?>