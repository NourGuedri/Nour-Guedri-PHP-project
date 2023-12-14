<?php
require_once("../controllers/clientController.php");
$client = new Clientcontroller();
$id = $_POST["sup"];
$client->delete($id);
header("refresh:0.1;url=listeClient.php");
?>