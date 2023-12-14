<?php
$id=$_POST["id"];
$cx=new mysqli("localhost","root","","dsi21");
$req="DELETE FROM etudiant WHERE id=$id" ;
$res=$cx->query($req);
if($res){ echo "supp effectuee avec succes";}
else {echo "pb de supp";}
?>
