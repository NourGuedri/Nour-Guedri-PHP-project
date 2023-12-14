<?php
include_once("modele.php");
class Voiture extends Modele{
 private $idVoiture,$numSerie,$marque,$carburant,$prixLocation;
 function __construct() 
{
parent::__construct();
 }
 function liste($param) {
    $query = "SELECT * FROM voiture WHERE carburant = :param";
    $res = $this->pdo->prepare($query);
    $res->bindParam(':param', $param, PDO::PARAM_STR);
    $res->execute();
    return $res;
}
function liste_toltal(){
    $query = "select * from voiture";
    $res=$this->pdo->prepare($query); 
    $res->execute();
    return $res;
    }
function liste_toltal_loc($l){
     $query = "select * from voiture where idVoiture = $l";
     $res=$this->pdo->prepare($query); 
     $res->execute();
     return $res;
     }
}?>