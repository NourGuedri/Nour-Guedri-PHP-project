<?php
$cx=new mysqli("localhost","root","","biblio");
$req="select * FROM etudiant" ;
$res=$cx->query($req);
echo "<table border='1' align = 'center' width = 100%><tr><td>Code</td><td>Nom</td><td>Prenom</td><td>Adresse</td><td>Classe</td></tr>";
while ($l=$res->fetch_array())
{echo"<tr><td>$l[0]</td><td>$l[1]</td><td>$l[2]</td><td>$l[3]</td><td>$l[4]</td></tr>";}
echo "</table>";
?>
