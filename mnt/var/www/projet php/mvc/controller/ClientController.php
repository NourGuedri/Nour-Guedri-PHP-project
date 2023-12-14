<?php
include_once('../model/Client.php') ;
include_once('../database/config.php');
class ClientController extends Connexion{
function __construct() {
parent::__construct();
}

function rechercheClient(Client $client ){
    $mail = $client->getEmail();
    $password = $client->getMotDePasse();

    $query = "select * from client WHERE email = '$mail' and mot_de_passe = '$password'";
    $res=$this->pdo->prepare($query); 
    $res->execute();
    return $res;
    }
function rechercheClientParNom($nom){
    $query = "select * from client WHERE nom like '%$nom%'";
    $res=$this->pdo->prepare($query);
    $res->execute();
    return $res;
    

}
    
function createClient(Client $client) {
        $nom = $client->getNom();
        $prenom = $client->getPrenom();
        $mot_de_passe = $client->getMotDePasse();
        $email = $client->getEmail();


        $query = "INSERT INTO client (`nom`, `prenom`, `mot_de_passe`, `email`) VALUES ('$nom', '$prenom',  '$mot_de_passe', '$email')";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res; 
    }
function getClientCount(){
    $query = "select count(*) from `client`";
    $res = $this->pdo->prepare($query);
    $res->execute();
    $count = $res->fetchColumn();

    return $count; 
}}
?>