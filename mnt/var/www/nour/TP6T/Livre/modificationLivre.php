<?php
include ("../connexion.php");
$code = $_POST["code"];
$titre = $_POST["titre"];
$auteur = $_POST["auteur"];
$date = $_POST["date"];
$req = "UPDATE `livre` SET `titre`='$titre',`auteur`='$auteur',`dateEdition`='$date' WHERE codeLivre = $code";
$res = $connexion->query($req);
if ($res){
    echo "update effuctuer avec succes";
}else{
    echo "echo bd update";
};
require("../deconnexion.php");
?>