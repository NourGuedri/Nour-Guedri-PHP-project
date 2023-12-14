<?php

session_start();

include_once('../controller/ProduitController.php');
$pc = new ProduitController();
//if the request is post and is admin insert a new product
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
    $nom = $_POST['nom'];
    $marque = $_POST['marque'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $image = 'images/'.$_POST['image']; 
    $couleur = $_POST['couleur'];
    $produit = new Produit("",$description,$marque,$couleur,$status,$nom,$prix,$image);
    $pc->createProduit($produit);
    header("Location: admin_dashboard.php");
}


?>