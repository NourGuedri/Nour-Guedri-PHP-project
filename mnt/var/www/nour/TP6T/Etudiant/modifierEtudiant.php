<?php
$code = $_POST["code"];
require_once("../connexion.php");
$req="select * from etudiant where codeEtudiant= $code";
$res = $connexion ->query($req);
if ($res->num_rows <= 0){
    echo "<script>alert(\"code est incorrect \")</script>";
    header("refresh:0.5;url=modifierEtudiant.html");
}
else{
    $l = $res->fetch_array() ;
}
require("../deconnexion.php");
// print_r
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<body>
    <form action="modificationEtudiant.php" method="post">
            <fieldset>
                <legend><h1 style="color : blue">Modification q'un Etudiant</h1></legend>
                Veuillez modifier les champs suivants : <br>
                <table>
                    <tr>
                        <td>Code</td>
                        <td><input type="text" name="code" value=<?php echo $l[0];?>></td>
                    </tr>
                    <tr>
                        <td>Nom</td>
                        <td><input type="text" name="Nom" value=<?php echo $l[1];?>></td>
                    </tr>
                    <tr>
                        <td>Prenom</td>
                        <td><input type="text" name="prenom" value=<?php echo $l[2];?>></td>
                    </tr>
                    <tr>
                        <td>Adresse</td>
                        <td><input type="text" name="adresse" value=<?php echo $l[3];?>></td>
                    </tr>
                    <tr>
                        <td>classe</td>
                        <td><input type="text" name="classe" value=<?php echo $l[4];?>></td>
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