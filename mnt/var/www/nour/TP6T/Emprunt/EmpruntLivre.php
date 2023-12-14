<?php
require("../connexion.php");
$req = "select codeLivre from livre";
$res = $connexion->query($req);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprunt un livre</title>
</head>
<body>
<form action="Emprunt.php" method="post">
        <fieldset>
            <legend><h1 style="color : blue">Emprunter un livre</h1></legend>
            <p>Veuillez remplir les champs suivants :</p>
            <p>Code Etudiant: <input type="text" name="code"></p>
            <p>
                Code de Livre :
                <select name="list" id="">
                    <?php
                    while($l = $res->fetch_array()) {
                        echo "<option value = $l[0]>$l[0]</option>";
                    }
                    ?>
                </select>
            </p>
            <p>
                date de Emprunte : <input type="date" name="date" id="">
            </p>

            <input type="reset" value="Annuler">
            <input type="submit" value="Enrigesterr">
        </fieldset>
    </form>
</body>
</html>
<?php 
require("../deconnexion.php");
?>