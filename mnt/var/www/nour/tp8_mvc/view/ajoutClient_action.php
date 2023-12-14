<?php
require_once("../Model/client.php");
include_once("../controllers/clientController.php");
$cin = $_POST["cin"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$tel = $_POST["tel"];
$client = new Client($cin,$nom,$prenom,$tel);
$clientcontroller = new ClientController();
$clientcontroller->insert($client);
header("Location:ajoutClient.php")
?>