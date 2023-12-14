<?php
require_once("../controllers/clientController.php");
require_once("../controllers/voiturecontroller.php");
$client = new Clientcontroller();
$voiture = new VoitureController();
$res = $client->liste();
$res2 = $voiture->liste_toltal();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ajouterLoc_action.php" method="post">
        <fieldset>
            <legend>Nouvelle Location : </legend>
            <table>
                <tr>
                    <td>
            <label for="">Client : </label>

                    </td>
                    <td>
            <select name="list_client" id="">
<?php
while($l = $res->fetch()){
    echo "<option value='$l[idClient]'>$l[prenom] $l[nom]</option>";
}
?>
            </select><br>

                    </td>
                </tr>
                <tr>
                    <td>
            <label for="">Voiture : </label>

                    </td>
                    <td>
                    <select name="list_voiture" id="">
<?php
while($l = $res2->fetch()){
    echo "<option value='$l[idVoiture]'>$l[marque]( $l[numSerie])</option>";
}
?>
            </select>

                    </td>
                </tr>
                <tr>
                    <td>
            <label for="">Date : </label>

                    </td>
                    <td>
            <input type="date" name="date" id=""><br>

                    </td>
                </tr>
                <tr>
                    <td>
            <label for="">Nomber Jour : </label>

                    </td>
                    <td>
            <input type="text" name="nbj" id=""><br>

                    </td>
                </tr>
                <tr>
                    <td>
            <input type="submit" value="Valider">

</td>
                </tr>
          
            </table>

        </fieldset>
    </form>
</body>
</html>