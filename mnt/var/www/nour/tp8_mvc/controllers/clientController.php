<?php
include_once("../database/config.php");
include_once("../Model/client.php");
class Clientcontroller extends Modele{

 function __construct() 
{
parent::__construct();
 }
 function insert(Client $c){
 $query="insert into client(ncin,nom,prenom,telephone)values (?, ?, ?, ?)";
$res=$this->pdo->prepare($query); 
return $res->execute(array($c->getNcin(),$c->getNom(),$c->getPrenom(),$c->getTel())); 
 }
 function delete($idClient) {
 $query = "delete from client where idClient=?";
 $res=$this->pdo->prepare($query); 
return $res->execute(array($idClient)); 
}
function liste(){
$query = "select * from client";
$res=$this->pdo->prepare($query); 
$res->execute();
return $res;
}
function liste_loc($l){
    $query = "select * from client where idClient = $l";
    $res=$this->pdo->prepare($query); 
    $res->execute();
    return $res;
    }
}?>