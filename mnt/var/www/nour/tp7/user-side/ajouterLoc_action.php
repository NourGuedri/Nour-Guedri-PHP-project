<?php
require_once("../model/location.php");
$location = new Location();
$idc = $_POST["list_client"];
$idv = $_POST["list_voiture"];
$date = $_POST["date"];
$nbj = $_POST["nbj"];
$num = $location->verifier($idc,$idv)->rowCount();
if ($num > 0 ){
    echo "<script>alert('le client a deja faire se location !! ')</script>";
    header("refresh:0.1;url=ajouterLoc.php");
}
else{
$location->insert($idc,$idv,$date,$nbj);
echo "<script>alert('Location ajouter avec succses ')</script>";
header("refresh:0.1;url=ajouterLoc.php");
}

?>