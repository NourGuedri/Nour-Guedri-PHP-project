<?php
/*$code = $_POST["code"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$classe = $_POST["classe"];
require_once "connexion.php";
$req1="select * FROM etudiant WHERE `CodeEtudiant`='$code'" ;
$res1=$connexion->query($req1);
$l=$res1->fetch_array();
$req="UPDATE `etudiant` SET `nom` = '$nom',`prenom` = '$prenom' ,'adresse'='$adresse','classe'='$classe' WHERE `code` =$code;" ;
$res=$connexion->query($req);
if($res1 && $res){ echo "modification effectuee avec succes";}
else {echo "pb de modification";} 
?>*/
require ("connexion.php");
$code = $_POST["code"];
$nom = $_POST["Nom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$classe = $_POST["classe"];
$req = "UPDATE `etudiant` SET `nom`='$nom',`prenom`='$prenom',`adresse`='$adresse',`classe`='$classe' WHERE codeEtudiant = $code";
$res = $connexion->query($req);
if ($res){
    echo "modification effectuee avec succes";
}else{
    echo "echo pd de modification";
};
require("deconnexion.php");
?>