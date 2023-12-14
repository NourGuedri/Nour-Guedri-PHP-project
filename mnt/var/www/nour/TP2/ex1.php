<html>
    <head></head>
    <body>
<?php
$t=array("nom"=>"AA","prenom"=>"BB","age"=>20);
echo "<table>";
foreach($t as $cle=>$val)
echo "<td>$cle</td>";
foreach($t as $val)echo $val.'|' ;
echo "<td>$val</td>";
echo"</table>";
?>
    </body>
</html>