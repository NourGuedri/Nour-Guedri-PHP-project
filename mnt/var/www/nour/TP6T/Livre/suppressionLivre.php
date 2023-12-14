<?php 
    $code = $_POST["code"];
    require("../connexion.php");
    $req1 = "select * from livre where codeLivre = $code";
    $res1 = $connexion->query($req1);
    if($res1->num_rows > 0) {
    $req="DELETE FROM `livre` WHERE codeLivre = $code";
    $res = $connexion ->query($req);
    if ($res){
        echo "suppression effuctue avec sucsses ";
    }else{
        echo "error !!! ";
    }}else{
        echo "le code de livre n'est pas dans le base";
    };
    require("../deconnexion.php");
    ?>