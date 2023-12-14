<?php


class Voiture{
    private $idVoiture, $numSerie, $marque, $carburant, $prixLocation;

   
    public function __construct($idVoiture, $numSerie, $marque, $carburant, $prixLocation) {
        
        $this->idVoiture = $idVoiture;
        $this->numSerie = $numSerie;
        $this->marque = $marque;
        $this->carburant = $carburant;
        $this->prixLocation = $prixLocation;
    }

    // Getter pour idVoiture
    public function getIdVoiture() {
        return $this->idVoiture;
    }

    // Setter pour idVoiture
    public function setIdVoiture($idVoiture) {
        $this->idVoiture = $idVoiture;
    }

    // Getter pour numSerie
    public function getNumSerie() {
        return $this->numSerie;
    }

    // Setter pour numSerie
    public function setNumSerie($numSerie) {
        $this->numSerie = $numSerie;
    }

    // Getter pour marque
    public function getMarque() {
        return $this->marque;
    }

    // Setter pour marque
    public function setMarque($marque) {
        $this->marque = $marque;
    }

    // Getter pour carburant
    public function getCarburant() {
        return $this->carburant;
    }

    // Setter pour carburant
    public function setCarburant($carburant) {
        $this->carburant = $carburant;
    }

    // Getter pour prixLocation
    public function getPrixLocation() {
        return $this->prixLocation;
    }

    // Setter pour prixLocation
    public function setPrixLocation($prixLocation) {
        $this->prixLocation = $prixLocation;
    }
}
?>
