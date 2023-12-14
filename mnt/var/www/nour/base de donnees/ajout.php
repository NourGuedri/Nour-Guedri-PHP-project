<?php
$id=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$cx=new mysqli("localhost","root","","dsi21");
$req="insert into etudiant values('$id','$nom','$prenom')";
$res=$cx->query($req);
if($res){ echo "insert effectuee avec succes";}
else {echo "pb d'insertion";}
?>
