<?php
include_once("../database/config.php");
class Voiture extends Modele{
 private $idVoiture,$numSerie,$marque,$carburant,$prixLocation;
 public function__construct( $idVoiture,$numSerie,$marque,$carburant,$prixLocation)
 {
    $this->idVoiture=$idVoiture;
    $this->numSerie=$numSerie;
    $this->marque=$marque;
    $this->carburant=$carburant;
    $this->dateLoc=$dateLoc;
 }
 public function getIdVoiture()
 {
    return $this->idVoiture;
    }
    public function getNumSerie()
    {
        return $this->numSerie;
    }
    public function getMarque()
    {
        return $this->marque;
    }
    public function getcarburant()
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
    public function setNumSerie($numSerie)
    {
        $this->numSerie=$numSerie;
    }
    public function setIdMarque($marque)
    {
        $this->marque=$marque;
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