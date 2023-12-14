<?php
$code = $_POST["code"];
require_once("../connexion.php");
$req="select * from livre where codeLivre= $code";
$res = $connexion ->query($req);
if ($res->num_rows <= 0){
    echo "<script>alert(\"code est incorrect \")</script>";
    header("refresh:0.5;url=modifierLivre.html");
}
else{
    $l = $res->fetch_array() ;
};
require("../deconnexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion</title>
</head>
<body>
    <form action="modificationLivre.php" method="post">
            <fieldset>
                <legend><h1 style="color : blue">Nouveau Livre</h1></legend>
                Veuillez modifier les champs suivants : <br>
                <table>
                    <tr>
                        <td>Code</td>
                        <td><input type="text" name="code" value=<?php echo $l[0];?>></td>
                    </tr>
                    <tr>
                        <td>Titre</td>
                        <td><input type="text" name="titre" value=<?php echo $l[1];?>></td>
                    </tr>
                    <tr>
                        <td>Auteur</td>
                        <td><input type="text" name="auteur" value=<?php echo $l[2];?>></td>
                    </tr>
                    <tr>
                        <td>Date Edition</td>
                        <td><input type="date" name="date" value=<?php echo $l[3];?>></td>
                    </tr>
                    <tr>
                        <td><input type="reset" value="Annuler"></td>
                        <td><input type="submit" value="Modifier"></td>
                    </tr>
                </table>
            </fieldset>
   
    </form>
</body>
</html>