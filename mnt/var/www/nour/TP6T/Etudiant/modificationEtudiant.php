<?php
include ("../connexion.php");
$code = $_POST["code"];
$nom = $_POST["Nom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$classe = $_POST["classe"];
$req = "UPDATE `etudiant` SET `nom`='$nom',`prenom`='$prenom',`adresse`='$adresse',`classe`='$classe' WHERE codeEtudiant = $code";
$res = $connexion->query($req);
if ($res){
    echo "update effuctuer avec succes";
}else{
    echo "echo bd update";
};
require("../deconnexion.php");
?>