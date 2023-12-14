<html>

<body>
    <form action="supprimerEtud_action.php" method="post">
        <fieldset >
            <legend style="color:blue"><h1>Supprimer un Etudiant</h1></legend>
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
                        <input type="reset" value="annuler" />
                    </td>
                    <td>
                        <input type="submit" value="executer" />
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>