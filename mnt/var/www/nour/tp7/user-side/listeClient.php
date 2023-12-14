<?php
require_once("client.php");
$client = new Client();

$res = $client->liste();

echo "<form action='supprimer.php' method='post'><h1 align = 'center'>Liste des clients";
echo "<table align = 'center' width='100%' border =1><tr><td></td><td>Identifiant</td><td>Numero CIN</td><td>Nom</td><td>Prenom</td><td>Telephone</td></tr>";
while($l = $res->fetch()){
    echo "<tr><td><input type ='radio' name ='sup' value='$l[0]'></td><td>$l[0]</td><td>$l[1]</td><td>$l[2]</td><td>$l[3]</td><td>$l[4]</td></tr>";
}
echo "</table><br>";
echo "<input type ='submit' value ='Supprimer' align='center'></form>";
?>