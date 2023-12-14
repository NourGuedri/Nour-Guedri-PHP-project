<?php
session_start();
require_once('../controller/ProduitController.php');
require_once('../controller/ClientController.php');
require_once('../controller/OrderController.php');
$order = new OrderController();
$produit = new ProduitController();
$client = new ClientController();
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
    $res = $produit->listAllProduit();
    $produits = $res->fetchAll();
    $clientCount = $client->getClientCount();
    
} else {
    header("refresh:0.1;url=index.php");
    echo "<script>alert('you are not an admin')</script>";
}
$orders = $order->listorder();

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
    <header>
        <nav>

            <a href="#users">Users</a></li>
            <a href="#products">Products</a></li>
            <a href="#orders">Orders</a></li>


        </nav>
    </header>

    <main>
        <section id="users">
            <h2>User Management</h2>
            <!-- display Client count as a square card with a border of 1px-->
            <a href="logout.php"><button type='submit' class='btn btn-danger'>Logout</button></a>
            <div class="card">
                <h3>Number Of Clients :
                    <?php echo $clientCount; ?>
                </h3>
            </div>
            <!-- recherche dun client -->
            <form action="rechercheClient.php" method="post">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" required>

                <input type="submit" value="Rechercher">
            </form>
        </section>

        <section id="products">
            <h2>Product Management</h2>
            <!-- display $produits in a table -->
            <table border="1">
                <tr>
                    <th>Reference</th>
                    <th>Nom</th>
                    <th>Marque</th>
                    <th>Couleur</th>
                    <th>Prix</th>
                    <th>description</th>
                    <th>status</th>
                    <th>Image</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                <?php foreach ($produits as $produit) { ?>
                    <tr>
                        <td>
                            <?php echo $produit['ref']; ?>
                        </td>
                        <td>
                            <?php echo $produit['nom']; ?>
                        </td>
                        <td>
                            <?php echo $produit['marque']; ?>
                        </td>
                        <td>
                            <?php echo $produit['couleur']; ?>
                        </td>
                        <td>
                            <?php echo $produit['prix']; ?>
                        </td>
                        <td>
                            <?php echo $produit['description']; ?>
                        </td>
                        <td>
                            <?php echo $produit['status']; ?>
                        </td>
                        <td><img src="<?php echo $produit['image'] ?>" alt="" height="150px"></td>

                        <td><a href="ModifyProduit.php?ref=<?php echo $produit['ref']; ?>">Modifier</a></td>
                        <td><a href="supprimerProduit.php?ref=<?php echo $produit['ref']; ?>">Supprimer</a></td>
                    </tr>
                <?php } ?>
            </table>
            <!-- a form to add a new product -->
            <h3>
                Ajouter un produit?
            </h3>
            <form action="ajouterProduit.php" method="post">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" required>
                <label for="marque">Marque :</label>
                <input type="text" name="marque" id="marque" required>
                <label for="prix">Prix :</label>
                <input type="number" name="prix" id="prix" required>
                <label for="couleur">Couleur :</label>
                <input type="text" name="couleur" id="couleur" required>
                <label for="description">Description :</label>
                <input type="text" name="description" id="description" required>
                <label for="status">Status :</label>
                <input type="text" name="status" id="status" required>
                <label for="image">Image :</label>
                <input type="file" name="image" id="image" required>
                <input type="submit" value="Ajouter">
            </form>

        </section>

        <section id="orders">
            <h2>Order Management</h2>
            <table border="1">
                <tr>
                    <th>Reference</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>email</th>
                    <th>address</th>
                    <th>telephone</th>
                    <th>prix total</th>
                    <th>Supprimer</th>
                </tr>
                <?php while($l = $orders->fetch()) { ?>
                    <tr>
                        <td>
                            <?php echo $l[0]; ?>
                        </td>
                        <td>
                            <?php echo $l[3]; ?>
                        </td>
                        <td>
                            <?php echo $l[4]; ?>
                        </td>
                        <td>
                            <?php echo $l[5]; ?>
                        </td>
                        <td>
                            <?php echo $l[6]; ?>
                        </td>
                        <td>
                            <?php echo $l[7]; ?>
                        </td>
                        <td>
                            <?php echo $l[2]; ?>
                        </td>
                        <td><a href="supprimerorder.php?ref=<?php echo $l[0]; ?>">Supprimer</a></td>
                    </tr>
                <?php } ?>
            </table>
        </section>
       
    </main>

    <footer>
        <p>&copy; 2023  nour  guedri</p>
    </footer>

    <script src="scripts/admin_scripts.js"></script>
    
</body>

</html>