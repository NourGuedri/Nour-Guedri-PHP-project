<?php
$id=$_POST["id"];
$cx=new mysqli("localhost","root","","dsi21");
$req="select * FROM etudiant WHERE id=$id" ;
$res=$cx->query($req);
$l=$res->fetch_array();

?>
<html>
<body>
    
        <form action="modification.php" method="post">
            <fieldset>
                <table>
                    <tr>
                        <td>
                            <label>id</label>
                        </td>
                        <td>
                            <input type="text" vus name="id" value="<?php echo $l[0] ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>nom</label>
                        </td>
                        <td>
                            <input type="text" name="nom" value="<?php echo $l[1] ?>" />
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <label>prenom</label>
                        </td>
                        <td>
                            <input type="text" name="prenom" value="<?php echo $l[2] ?>"/>
                        </td>
                        
                    </tr>
                       <tr>
                        <td>
                            <input type="submit" value="modifier"/>
                        </td>
                        <td>
                            <input type="reset" value="annuler"/>
                        </td>
                       
                       </tr>
                </table>
            </fieldset>
            </form>
    
    
</body>
</html>