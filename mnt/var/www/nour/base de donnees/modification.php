<?php
$id=$_POST["id"];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$cx=new mysqli("localhost","root","","dsi21");
$req="UPDATE `etudiant` SET `nom` = '$nom',
`prenom` = '$prenom' WHERE `id` =$id;" ;
$res=$cx->query($req);
if($res){ echo "modification effectuee avec succes";}
else {echo "pb de modification";}
?>
