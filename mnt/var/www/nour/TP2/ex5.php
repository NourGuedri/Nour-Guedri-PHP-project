<html>
    <head></head>
    <body>
<?php
/*$d=3661;
$h=$d /3600;
echo floor($h);
$mm=floor($h);
$m=($d-($mm *3600))/60;
echo floor($m);
$s=floor($m);
$ss=($m-($s *60));
echo floor($ss);

if($h<10)$h="0".$h;
if($m<10)$m="0".$m;
if($s<10)$s="0".$s;*/
$a=3661;
$hours=floor($a/3600);
  $hours < 10 ? $hours="0".$hours : null;
   $mins=floor(($a%3600)/60);
    $mins < 10 ? $mins="0".$mins : null;
     $secs =floor(($a%3600)%60);
      $secs < 10 ? $secs="0".$secs : null;
       echo $hours.":".$mins.":".$secs; 
?>
    </body>
</html>