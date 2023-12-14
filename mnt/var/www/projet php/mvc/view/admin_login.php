<?php
include_once('../controller/AdminController.php');
session_start();
$mail = $_POST['email'];
$password = $_POST['password'];
$ac = new AdminController();

$res = $ac->rechercheAdmin($mail, $password);
if ($res->rowCount() == 1) {
    $l = $res->fetch();
    $_SESSION['id_admin'] = $l[0];
    $_SESSION['nom'] = $l[1];
    $_SESSION['prenom'] = $l[2];
    $_SESSION['email'] = $l[3];
    $_SESSION['mot_de_passe'] = $l[4];
    $_SESSION['admin'] = true;

    header("Location: admin_dashboard.php");

} else {
    header("refresh:0.1;url=admin.php");

    echo "<script>alert('Wrong! Username/Password is invalid.')</script>";


}





?>