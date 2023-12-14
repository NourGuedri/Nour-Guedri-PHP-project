<?php
require_once("../model/client.php");
require_once("../model/location.php");
require_once("../modelvoiture.php");
$client = new Client();
$voiture = new Voiture();
$location = new Location();

$res3 = $location->liste();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <h1 align = 'center'>Liste les locations</h1>
        <table border=1  width="100%">
            <tr>
                <th colspan="3">Location</th>
                <th colspan="2">Voiture</th>
                <th colspan="3">Client</th>
            </tr>
            <tr>
                <td>Identifiant</td>
                <td>Nbr de jours</td>
                <td>Date</td>
                <td>Marque</td>
                <td>Numero de serie</td>
                <td>Numero CIN</td>
                <td>Nom</td>
                <td>Prenom</td>
                
            </tr>
            <?php
            while($l3 = $res3->fetch()){
                echo "<tr><td>$l3[0]</td>
                <td>$l3[3]</td>
                <td>$l3[4]</td>";
                $res = $client->liste_loc($l3[1]);
                $res2 = $voiture->liste_toltal_loc($l3[2]);
                $l2 = $res2->fetch();
                $l= $res->fetch();
                echo "<td>$l2[2]</td>
                <td>$l2[3]</td>
                <td>$l[1]</td>
                <td>$l[2]</td>
                <td>$l[3]</td></tr>";
            }
            ?>

        </table>
    </fieldset>
</body>
</html>