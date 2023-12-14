<?php
require("../connexion.php");
$req="select * from emprunter";
$res = $connexion ->query($req);

echo "<fieldset><h1 align = 'center' style ='color : blue'><i>Liste les Emprunter</i></h1>";
echo "<table border='1' align = 'center' width = 100% ><tr><th>code Etudiant</th><th>code Live </th><th>date Emprunt</th></tr>";
while($l = $res->fetch_array()){
    echo "<tr><td>$l[2]</td><td>$l[1]</td><td>$l[0]</td></tr>";
}
echo "</table></fieldset>";
require("../deconnexion.php");
?>