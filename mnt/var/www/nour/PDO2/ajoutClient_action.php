<?php
require_once "Client.php";
$cin = $_POST["cin"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$telephone = $_POST["tel"];
$client=new Client();
$client->insert($cin,$nom,$prenom,$telephone);
header("Location:ajoutClient.php");
?>

