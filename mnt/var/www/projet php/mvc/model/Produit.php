<?php

class Produit {
private $ref,$description,$marque,$couleur,$status,$nom,$prix,$image;
public function __construct($ref="",$description="",$marque="",$couleur="",$status="",$nom="",$prix="",$image="") {
    $this->ref = $ref;
    $this->description = $description;
    $this->marque = $marque;
    $this->couleur = $couleur;
    $this->status = $status;
    $this->nom = $nom;
    $this->prix = $prix;
    $this->image = $image;
    }
    
    public function getRef() {
    return $this->ref;
    }
    
    public function getDescription() {
    return $this->description;
    }
    
    public function getMarque() {
    return $this->marque;
    }
    
    public function getCouleur() {
    return $this->couleur;
    }
    
    public function getStatus() {
    return $this->status;
    }
    
    public function getNom() {
    return $this->nom;
    }
    
    public function getPrix() {
    return $this->prix;
    }
    
    public function getImage() {
    return $this->image;
    }
    
    public function setRef($ref) {
    $this->ref = $ref;
    }
    
    public function setDescription($description) {
    $this->description = $description;
    }
    
    public function setMarque($marque) {
    $this->marque = $marque;
    }
    
    public function setCouleur($couleur) {
    $this->couleur = $couleur;
    }
    
    public function setStatus($status) {
    $this->status = $status;
    }
    
    public function setNom($nom) {
    $this->nom = $nom;
    }
    
    public function setPrix($prix) {
    $this->prix = $prix;
    }
    
    public function setImage($image) {
    $this->image = $image;
    }
}?>