<?php
require_once("../Model/location.php");
require_once("../controllers/locationcontroller.php");
$idc = $_POST["list_client"];
$idv = $_POST["list_voiture"];
$date = $_POST["date"];
$nbj = $_POST["nbj"];
$location = new Location($idv,$idc,$nbj,$date);
$locationcontroller = new LocationController();
$num = $locationcontroller->verifier($idc,$idv)->rowCount();
if ($num > 0 ){
    echo "<script>alert('le client a deja faire se location !! ')</script>";
    header("refresh:0.1;url=ajouterLoc.php");
}
else{
$locationcontroller->insert($location);
echo "<script>alert('Location ajouter avec succses ')</script>";
header("refresh:0.1;url=ajouterLoc.php");
}

?>