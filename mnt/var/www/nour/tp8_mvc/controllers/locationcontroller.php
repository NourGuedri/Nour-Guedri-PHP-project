<?php
include_once("../database/config.php");
include_once("../Model/location.php");
class LocationController extends Modele{
 function __construct() 
{
parent::__construct();
 }
 function liste() {
    $query = "SELECT * FROM location";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function insert(Location $l){
    $query="insert into location(idClient,idVoiture,dateLoc,nbrJour)values (?, ?, ?, ?)";
   $res=$this->pdo->prepare($query); 
   return $res->execute(array($l->getIdClient(),$l->getIdVoiture(),$l->getDateLoc(),$l->getNbJour())); 
    }
function verifier($idc,$idv){
    $query = "select * from location where idClient = $idc and idVoiture = $idv";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
}?>