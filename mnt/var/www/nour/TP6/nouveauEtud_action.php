<?php
require "connexion.php";
$code = $_POST["code"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$classe = $_POST["classe"];
$req="insert into etudiant values($code, '$nom','$prenom','$adresse','$classe')";
$res=$connexion->query($req);            
if($res){ echo "insert effectuee avec succes";}
else {echo "pb d'insertion";}
require "deconnexion.php";
?>

