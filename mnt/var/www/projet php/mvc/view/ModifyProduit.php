<?php
require_once('../controller/ProduitController.php');
$produit = new ProduitController();
$id = $_GET["ref"];
$pro = $produit->produit($id)->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_dashboard.css">
    <!-- Link any necessary libraries or frameworks here -->
</head>

<body>
<form action="modify_action_produit.php" method="post">
<label for="nom">Nom :</label>
<input type="text" name="nom" id="nom" required value='<?php echo $pro[5] ?>'>
<label for="marque">Marque :</label>
<input type="text" name="marque" id="marque" required value='<?php echo $pro[2] ?>'>
<label for="prix">Prix :</label>
<input type="number" name="prix" id="prix" required value='<?php echo $pro[6] ?>'>
<label for="couleur">Couleur :</label>
<input type="text" name="couleur" id="couleur" required value='<?php echo $pro[3] ?>'>
<label for="description">Description :</label>
<input type="text" name="description" id="description" required value='<?php echo $pro[1] ?>'>
<label for="status">Status :</label>
<input type="text" name="status" id="status" required value='<?php echo $pro[4] ?>'>
 <input type="hidden" name="id"value='<?php echo $pro[0] ?>'>
<input type="submit" value="Modifier">
</form>
</body>
</html>


