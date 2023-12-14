<?php
require("../connexion.php");
$critere = $_POST['list'];
$valeur = $_POST["valeur"];
$req = "select * from livre where $critere = '$valeur'";
$res = $connexion->query($req);
if ($res->num_rows > 0) {
echo "<h1 align = 'center' style = 'color : green'>le Livre cherché existe dans la base </h1>";
}
else{
echo "<h1 align = 'center' style = 'color : red'>le Livre cherché n'existe pas dans la base </h1>";

};
require("../deconnexion.php");

?>