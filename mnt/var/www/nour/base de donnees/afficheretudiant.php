<?php

$cx=new mysqli("localhost","root","","dsi21");
$req="select * FROM etudiant" ;
$res=$cx->query($req);
echo "<table border='1'><tr><td>ID</td><td>NOM</td><td>PRENOM</td></tr>";
while ($l=$res->fetch_array())
{echo"<tr><td>$l[0]</td><td>$l[1]</td><td>$l[2]</td></tr>";}
echo "</table>";
?>
