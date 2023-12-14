<?php
require "connexion.php";
$code = $_POST["code"];
$req="DELETE FROM etudiant WHERE `CodeEtudiant`='$code'" ;
$res=$connexion->query($req);
if($res){ echo "supp effectuee avec succes";}
else {echo "pb de supp";}
require "deconnexion.php";
?>
