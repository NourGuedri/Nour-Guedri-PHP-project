<?php
require_once("voiture.php");
$voiture = new Voiture();
$type = $_POST["list"];
if ($type == "0"){
    echo "selection une carburant";
}else{
    $res = $voiture->liste($type);
    if ($res->rowsCount() == 0) {
        echo "<script>alert(\"Aucune voiture trouve pour ce type de carburant\")</script>";
        header("refresh:0.1;url=rechercherVoiture.html");
    }
    else {
echo "<fieldset align = 'center'><h1>Liste des voiture : $type</h1><table width='100%' border =1><tr><td>Numeroe de serie</td><td>Marque</td><td>Prix de location</td></tr>";
while($l = $res->fetch()){
    echo "<tr><td>$l[0]</td><td>$l[1]</td><td>$l[2]</td></tr>";
}
echo "</table></fieldset>";
    }
}

?>