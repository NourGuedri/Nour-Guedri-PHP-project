<?php
session_start();
include_once '../controller/PannierController.php';

//if request post and user logged in
if(isset($_SESSION["id"])){
    $id = $_SESSION["id"];
    $size=$_POST["size"];
    $quantity=$_POST["quantity"];
    $ref=$_POST["ref"];
    $taille=$_POST["taille"];
    $prix=$_POST["prix"];
    $total_prod = $prix * $quantity;
    $pannier = new Pannier('', $id, $ref, $quantity, $taille, $total_prod);

    $pannierC = new PannierController();
    $pannierC->addpannier($pannier);
    // reload the page
    header("location:checkout.php");
}
else{
    header("location:checkout.php");
}


?>