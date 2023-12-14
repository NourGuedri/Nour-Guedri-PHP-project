<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["t0"];
    $nom = $_POST["t1"];
    $prenom = $_POST["t2"];
    $genre = $_POST["g"];
    $niveauScolaire = $_POST["op"];
    $candidat = $_POST["c"];

    $file = fopen("eleves.txt", "r");
    $numerosExistant = array();
    while (($line = fgets($file)) !== false) {
        $data = explode("#", $line);
        $numerosExistant[] = $data[0];
    }
    fclose($file);

    if (in_array($numero, $numerosExistant)) {
        echo "eleve deja inscrit.";
    } else {
        $file = fopen("eleves.txt", "a");
        $newData = "$numero#$nom#$prenom#$genre#$niveauScolaire#$candidat\n";
        fwrite($file, $newData);
        fclose($file);
        echo "Inscription reussie. Merci !";
        header("Refresh: 2; URL=Inscription.html");
        exit;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["vote"])) {
    $vote = $_GET["vote"];
    $file = fopen("votes.txt", "a");
    fwrite($file, $vote . "\n");
    fclose($file);
    echo "Vote enregistre. Merci !";
    header("Refresh: 2; URL=Inscription.html");
}
?>

