<?php
$nom=$_POST['t1'];
$prenom=$_POST['t2'];
$moyenne=$_POST['t3'];
$f=fopen("etudiant.txt","a");
$ch=$nom."#".$prenom."#".$moyenne."\n";
$ok=fwrite($f,$ch);
fclose($f);
?>