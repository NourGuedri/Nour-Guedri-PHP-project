<?php
require("../connexion.php");
$req="select * from livre";
$res = $connexion ->query($req);

echo "<fieldset><h1 align = 'center' style ='color : blue'><i>Liste les étudiants</i></h1>";
echo "<table border='1' align = 'center' width = 100% ><tr><th>Code</th><th>Titre</th><th>Auteur</th><th>Date Edidtion</th></tr>";
while($l = $res->fetch_array()){
    echo "<tr><td>$l[0]</td><td>$l[1]</td><td>$l[2]</td><td>$l[3]</td></tr>";
}
echo "</table></fieldset>";
require("../deconnexion.php");
?>