<html>

<body>
    <form action="nouveauEtud_action.php" method="post">
        <fieldset >
            <legend style="color:blue"><h1>Nouveau Etudiant</h1></legend>
            <table>
                Veuillez remplir les champs suivants:
                <tr>
                    <td>
                        <label>code</label>
                    </td>
                    <td>
                        <input type="text" name="code" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>nom</label>
                    </td>
                    <td>
                        <input type="text" name="nom" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>prenom</label>
                    </td>
                    <td>
                        <input type="text" name="prenom" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>adresse</label>
                    </td>
                    <td>
                        <input type="text" name="adresse" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>classe</label>
                    </td>
                    <td>
                        <input type="text" name="classe" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="reset" value="annuler" />
                    </td>
                    <td>
                        <input type="submit" value="enregistrer" />
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>