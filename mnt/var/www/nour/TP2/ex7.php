<?php
    $civilite = $_POST['m'];
    $nom = $_POST['t1'];
    $prenom = $_POST['t2'];
    $classe = $_POST['op'];
    $option = $_POST['ch']; // Utilisez $option pour stocker les données de la case à cocher
    $commentaire = $_POST['cmt'];
    
    echo "<table border='1'>";
    echo "<tr><td>Civilité</td><td>Nom</td><td>Prénom</td><td>Classe</td><td>Option</td><td>Commentaire</td></tr>";
    echo "<tr><td>" . $civilite . "</td><td>" . $nom . "</td><td>" . $prenom . "</td><td>" . $classe . "</td><td>" . implode(", ", $option) . "</td><td>" . $commentaire . "</td></tr>";
    echo "</table>";
?>