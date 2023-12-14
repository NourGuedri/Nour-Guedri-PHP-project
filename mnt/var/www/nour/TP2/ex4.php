<html>
    <head></head>
    <body>
<?php
$a=5; echo $a."<br>";
if(isset($a))echo "existe";
unset ($a);echo $a;
if(isset($a))echo $a;
?>
</body>
</html>