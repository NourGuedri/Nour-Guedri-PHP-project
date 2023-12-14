<?php
include_once('../model/Produit.php') ;
include_once('../database/config.php');
class ProduitController extends Connexion{
function __construct() {
parent::__construct();
}

function getAllnom()
{
    $query = "select nom,image from produit group by nom";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res; 
}
function listproduit($nom){
    
    $query = "select * from produit where nom = '$nom'";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res; 
}
function listproduitparprix($nom,$min,$max){
    $query = "select * from produit where nom = '$nom' and prix between $min and $max ";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function listproduitparmarque($nom,$min,$max,$marque){
    $query = "select * from produit where nom = '$nom' and prix between $min and $max and marque = '$marque'";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}

function produit($id){
    $query = "select * from produit where ref = $id";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res; 
}
function listAllProduit(){
    $query = "select * from produit";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res; 
}
function createProduit(Produit $produit) {
        $nom = $produit->getNom();
        $marque = $produit->getMarque();
        $prix = $produit->getPrix();
        $couleur = $produit->getCouleur();
        $description = $produit->getDescription();
        $status = $produit->getStatus();
        $image = $produit->getImage();
        $query = "INSERT INTO produit (`nom`, `marque`,`couleur`, `prix`, `description`, `status`, `image`) VALUES ('$nom', '$marque','$couleur', $prix, '$description', '$status', '$image')";
        
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res; 
    }
    function updateproduit(Produit $produit) {
        $nom = $produit->getNom();
        $marque = $produit->getMarque();
        $prix = $produit->getPrix();
        $couleur = $produit->getCouleur();
        $description = $produit->getDescription();
        $status = $produit->getStatus();
        $id = $produit->getRef();
        
        $query = "UPDATE produit SET nom = ?, marque = ?, prix = ?, couleur = ?, description = ?, status = ? WHERE ref = ?";
        
        $res = $this->pdo->prepare($query);
        $res->execute(array($nom, $marque, $prix, $couleur, $description, $status, $id));
        
        return $res;
    }
    
function deleteProduit($ref) {
        $query = "DELETE FROM produit WHERE `ref` = '$ref'";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res; 
    }
}
?>