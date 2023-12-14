<?php
$f=fopen("etudiant.txt","r");
echo "<table  border='1'>";
while(!feof($f))
{
    echo "<tr>";
    $l=fgets($f,255);
    if($l)
    {$t=explode("#",$l);
    echo "<td>".$t[0]."</td><td>".$t[1]."</td><td>".$t[2]."</td>";}
    echo"</tr>";
}
echo "</table>";
?>