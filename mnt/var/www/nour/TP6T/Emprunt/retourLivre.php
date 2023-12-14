<?php
require("../connexion.php");
$code = $_POST["code"];
$codeLivre = $_POST["codeLivre"];
$req1 = "select * from emprunter where codeEtudiant = $code and codeLivre = $codeLivre";
$res1 = $connexion->query($req1);
if($res1->num_rows <= 0) 
{
    echo "se etudiant et se livre ne trouve pas dans la base !!";
}
else{
    $req2 = "DELETE FROM `emprunter` WHERE codeEtudiant = $code and codeLivre = $codeLivre ";
    $res2 = $connexion->query($req2);
    if ($res2){
        echo "update effectué avec succès";
    }else{
        echo "error de update db !!!";
    }
}
?>