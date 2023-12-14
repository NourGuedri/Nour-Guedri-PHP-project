<!DOCTYPE html>
<html>
<head>
    <title>Afficher le numéro de telephone</title>
</head>
<body>
    <?php
    if (isset($_POST['contact'])) {
        $telephone = $_POST['contact'];
        echo "Le numero de telephone est : $telephone";
    } else {
        echo "Aucun contact sélectionne.";
    }
    ?>
</body>
</html>
