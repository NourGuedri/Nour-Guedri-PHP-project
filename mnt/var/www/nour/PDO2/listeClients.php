<?php
require_once "Client.php";
$client=new Client();
$res=$client->liste();

echo "<form action='supprimer.php' method='post'><fieldset><legend><h1 style='color : blue'>Liste des Clients</h1></legend><table border='1' align = 'center' width = 100%><tr><td></td><td>Identifiant</td><td>Cin</td><td>Nom</td><td>Prenom</td><td>Telephone</td></tr>";
while ($l=$res->fetch())
{echo "<tr><td><input type='radio' name='supp' value='$l[0]'></td><td>$l[0]</td><td>$l[1]</td><td>$l[2]</td><td>$l[3]</td><td>$l[4]</td></tr>";}
echo "</table>
<input type='submit'  value='Supprimer' align='center'>";
echo"</fieldset></form>";

?>

