<?php
include ("../connexion.php");
$code = $_POST["code"];
$nom = $_POST["Nom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$classe = $_POST["classe"];
$req1 = "SELECT * FROM `etudiant` WHERE codeEtudiant = $code;";
$res1 = $connexion->query($req1);
if ($res1->num_rows <= 0) {
$req2 = "INSERT INTO `etudiant` VALUES ($code,'$nom','$prenom','$adresse','$classe')";
$res2 = $connexion->query($req2);
if ($res2){
    echo "inserstion effuctue avec sucsses";
}else{
echo "error !! ";
}
} else {
    echo "l'etudiant est trouve dans la base ";
};
require("../deconnexion.php");
?>