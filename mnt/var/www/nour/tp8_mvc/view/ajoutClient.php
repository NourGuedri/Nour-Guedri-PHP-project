<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajoute etudiant </title>
</head>
<body>
    <form action="ajoutClient_action.php" method="post">
        <fieldset>
            <legend>Nouveau Client : </legend>
            <table>
                <tr>
                    <td>
            <label for="">Numéro de CIN : </label>

                    </td>
                    <td>
            <input type="text" name="cin" id=""><br>

                    </td>
                </tr>
                <tr>
                    <td>
            <label for="">Nom : </label>

                    </td>
                    <td>
            <input type="text" name="nom" id=""><br>

                    </td>
                </tr>
                <tr>
                    <td>
            <label for="">Prenom : </label>

                    </td>
                    <td>
            <input type="text" name="prenom" id=""><br>

                    </td>
                </tr>
                <tr>
                    <td>
            <label for="">Telephone : </label>

                    </td>
                    <td>
            <input type="text" name="tel" id=""><br>

                    </td>
                </tr>
                <tr>
                    <td>
            <input type="submit" value="Enregistrer">

                    </td>
                    <td>
            <input type="reset" value="Annuler">

                    </td>
                </tr>
          
            </table>

        </fieldset>
    </form>
</body>
</html>