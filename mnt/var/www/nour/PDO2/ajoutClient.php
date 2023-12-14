<html>

<body>
    <form action="ajoutClient_action.php" method="post">
        <fieldset >
            <legend style="color:blue"><h1>Nouveau Client</h1></legend>
            <table>
                    <tr>
                    <td>
                        <label>Numero de CIN</label>
                    </td>
                    <td>
                        <input type="text" name="cin" />
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
                        <label>Telephone</label>
                    </td>
                    <td>
                        <input type="text" name="tel" />
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