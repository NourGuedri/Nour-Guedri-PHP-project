<?php

class Location  {
    private $idVoiture, $idLoc, $idClient, $nbJour, $dateLoc;

    public function __construct($idVoiture, $idClient, $nbJour, $dateLoc) {
        $this->idVoiture = $idVoiture;
        $this->idClient = $idClient;
        $this->nbJour = $nbJour;
        $this->dateLoc = $dateLoc;
    }

    // Getter pour idVoiture
    public function getIdVoiture() {
        return $this->idVoiture;
    }

    // Setter pour idVoiture
    public function setIdVoiture($idVoiture) {
        $this->idVoiture = $idVoiture;
    }

    // Getter pour idLoc
    public function getIdLoc() {
        return $this->idLoc;
    }

    // Setter pour idLoc
    public function setIdLoc($idLoc) {
        $this->idLoc = $idLoc;
    }

    // Getter pour idClient
    public function getIdClient() {
        return $this->idClient;
    }

    // Setter pour idClient
    public function setIdClient($idClient) {
        $this->idClient = $idClient;
    }

    // Getter pour nbJour
    public function getNbJour() {
        return $this->nbJour;
    }

    // Setter pour nbJour
    public function setNbJour($nbJour) {
        $this->nbJour = $nbJour;
    }

    // Getter pour dateLoc
    public function getDateLoc() {
        return $this->dateLoc;
    }

    // Setter pour dateLoc
    public function setDateLoc($dateLoc) {
        $this->dateLoc = $dateLoc;
    }
}
?>
