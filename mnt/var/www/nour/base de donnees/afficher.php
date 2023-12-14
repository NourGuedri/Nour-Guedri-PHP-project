<?php
$id=$_POST["id"];
$cx=new mysqli("localhost","root","","dsi21");
$req="select * FROM etudiant WHERE id=$id" ;
$res=$cx->query($req);
$l=$res->fetch_array();
echo"<table border='1'><tr><td>ID</td><td>NOM</td><td>PRENOM</td></tr><tr><td>$l[0]</td><td>$l[1]</td><td>$l[2]</td></tr></table>";
?>
