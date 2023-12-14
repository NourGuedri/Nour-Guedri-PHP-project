<?php
$contact = array(
    'clientX' => '72222666',
    'societeY' => '71999888',
    'fournisseurZ' => '73444555',
    'ActionnaireT' => '74333444'
);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de selection de contact</title>
</head>
<body>
    <form action="afficher_num.php" method="post">
        <label for="contact">Selectionnez un contact :</label>
        <select name="contact" id="contact">
            <?php
            foreach ($contact as $designation => $telephone) {
                echo "<option value='$telephone'>$designation</option>";
            }
            ?>
        </select>
        <input type="submit" value="Afficher le numero de telephone">
    </form>
</body>
</html>
