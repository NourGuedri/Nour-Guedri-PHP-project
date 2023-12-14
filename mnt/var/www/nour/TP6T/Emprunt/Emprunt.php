<?php
require("../connexion.php");
$code = $_POST["code"];
$codeLivre= $_POST["list"];
$date = $_POST["date"]; 
$req1 = "select * from etudiant where codeEtudiant = $code";
$res1 = $connexion->query($req1);
if ($res1->num_rows <= 0) {
    echo "l'etudiant ne trouve pas dans la base";
}
else{
    $req2 = "select * from emprunter where codeEtudiant  = $code and codeLivre = $codeLivre";
    $res2 = $connexion->query($req2);
    if ($res2->num_rows > 0) {
        echo "ce etudiant a ete emprunter cette livre !!!";
    }else{
        $req3 = "INSERT INTO `emprunter`(`dateEmprunt`, `codeLivre`, `codeEtudiant`) VALUES ('$date' ,$codeLivre,$code)";
        $res3 = $connexion->query($req3);
        if ($res3){
            echo "insertion effuctue avec sucsses";
        }else{
            echo "error insertion de donner !!";
        }
    }
}
require("../deconnexion.php");
?>