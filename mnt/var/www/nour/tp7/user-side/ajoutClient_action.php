<?php
require_once("../model/client.php");
$client = new Client();
$cin = $_POST["cin"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$tel = $_POST["tel"];
$client->insert($cin,$nom,$prenom,$tel);
header("Location:ajoutClient.php")
?>