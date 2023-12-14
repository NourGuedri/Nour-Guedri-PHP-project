<?php
include ("../connexion.php");
$code = $_POST["code"];
$titre = $_POST["titre"];
$auteur = $_POST["auteur"];
$date = $_POST["date"];
$req1 = "SELECT * FROM `livre` WHERE codeLivre = $code;";
$res1 = $connexion->query($req1);
if ($res1->num_rows <= 0) {
$req2 = "INSERT INTO `livre` VALUES ($code,'$titre','$auteur','$date')";
$res2 = $connexion->query($req2);
if ($res2){
    echo "inserstion effuctue avec sucsses";
}else{
echo "error !! ";
}
} else {
    echo "Livre est trouve dans la base ";
};
require("../deconnexion.php");

?>