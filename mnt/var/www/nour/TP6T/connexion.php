<?php

$connexion = new mysqli("localhost", "root", "","biblio" );
if ($connexion->connect_error) {
    die("Erreur de connexion : " . $connexion->connect_error);
}



?>
