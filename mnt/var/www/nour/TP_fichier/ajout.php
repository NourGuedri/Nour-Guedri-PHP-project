<?php
function verifier($numero) {
    $lines = file('contacts.txt', FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        $data = explode('#', $line);
        if (count($data) >= 4 && $data[3] == $numero) {
            return true;
        }
    }
    return false;
}

function nombre_contact() {
    $lines = file('contacts.txt', FILE_IGNORE_NEW_LINES);
    return count($lines);
}

if (isset($_POST['designation']) && isset($_POST['ville']) && isset($_POST['telephone'])) {
    $designation = $_POST['designation'];
    $ville = $_POST['ville'];
    $telephone = $_POST['telephone'];

    if (!verifier($telephone)) {
        $nouveau_contact = nombre_contact() + 1;
        $nouvelle_ligne = "$nouveau_contact#$designation#$ville#$telephone\n";
        file_put_contents('contacts.txt', $nouvelle_ligne, FILE_APPEND);
        echo "Le contact a ete ajoute avec succes.";
    } else {
        echo "Le numero de telephone existe deja.";
    }
} else {
    echo "Tous les champs doivent etre remplis.";
}
?>
