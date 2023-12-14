<?php
require_once ("Client.php");
$id=$_POST["supp"];
$client=new Client();
$client->delete($id);
header("refresh:0.1;url = listeClients.php");
?>

