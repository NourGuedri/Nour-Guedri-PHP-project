<?php
require_once("../model/client.php");
$client = new Client();
$id = $_POST["sup"];
$client->delete($id);
header("refresh:0.1;url=listeClient.php");
?>