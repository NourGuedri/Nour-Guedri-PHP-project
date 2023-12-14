<?php
include_once('../model/Admin.php') ;
include_once('../database/config.php');
class AdminController extends Connexion{
function __construct() {
parent::__construct();
}

function rechercheAdmin($mail,$password){
    $query = "select * from admin WHERE email = '$mail' and mot_de_passe = '$password'";
    $res=$this->pdo->prepare($query); 
    $res->execute();
    
    return $res;
    }

function createAdmin(Admin $admin) {
        $nom = $admin->getNom();
        $prenom = $admin->getPrenom();
        $mot_de_passe = $admin->getMotDePasse();
        $email = $admin->getEmail();

        $query = "INSERT INTO admin (nom, prenom, mot_de_passe, email) VALUES ('$nom', '$prenom', '$mot_de_passe', '$email')";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res; 
    }
}
?>