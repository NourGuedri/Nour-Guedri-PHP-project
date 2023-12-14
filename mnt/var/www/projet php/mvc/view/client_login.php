<?php
session_start();

include_once('../controller/ClientController.php');
$cc = new ClientController();
//if the request is post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mail = $_POST['email'];
    $password = $_POST['password'];
    $client = new Client("",'','',$password,$mail);
    $res = $cc->rechercheClient($client);
    if ($res->rowCount() == 1) {
        $l = $res->fetch();
        $_SESSION['id'] = $l[0];
        $_SESSION['nom'] = $l[1];
        $_SESSION['prenom'] = $l[2];
        $_SESSION['email'] = $l[4];
        $_SESSION['admin'] = false;
        header("Location: client.php");
    } else {
        header("refresh:0.1;url=checkout.php");
        echo "<script>alert('Wrong! Username/Password is invalid.')</script>";
    }
    header("Location: checkout.php");
}



?>