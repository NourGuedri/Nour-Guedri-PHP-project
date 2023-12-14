<?php
include_once("modele.php");
class Location extends Modele{
 private $idVoiture,$idLoc,$idClient,$nbJour,$dateLoc;
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
}?>