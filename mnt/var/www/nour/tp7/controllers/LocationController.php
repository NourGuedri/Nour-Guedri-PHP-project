<?php
include_once('../models/Client.php') ;
include_once('../database/config.php');
class LocationController extends Connexion{
function __construct() {
parent::__construct();
}

function liste() {
    $query = "SELECT * FROM location";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function insert($idc,$idv,$date,$nbj){
    $query="insert into location(idClient,idVoiture,dateLoc,nbrJour)values (?, ?, ?, ?)";
   $res=$this->pdo->prepare($query); 
   return $res->execute(array($idc,$idv,$date,$nbj)); 
    }
function verifier($idc,$idv){
    $query = "select * from location where idClient = $idc and idVoiture = $idv";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}

}
?>