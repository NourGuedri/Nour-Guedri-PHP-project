<?php 
    $code = $_POST["code"];
    require("../connexion.php");
    $req1 = "select * from etudiant where codeEtudiant = $code";
    $res1 = $connexion->query($req1);
    if($res1->num_rows > 0) {
    $req="DELETE FROM `etudiant` WHERE codeEtudiant = $code";
    $res = $connexion ->query($req);
    if ($res){
        echo "suppression effuctue avec sucsses ";
    }else{
        echo "error !!! ";
    }}else{
        echo "le code de etudiant n'est pas dans le base";
    };
    require("../deconnexion.php");
    ?>