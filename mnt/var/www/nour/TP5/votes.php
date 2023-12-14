<!doctype html> 
<html> 
<head> 
 <title> Saisie des Votes </title> 
</head> 
<body> 
<h2 align="center">Saisie des Votes </h2> 
<form name="form1" method="post" action="Votes_action.php"> 
<table width="100%" border="0" align="center"> 
 <tr> 
 <td> Electeur N°:</td> 
 <td><input name="num" type="text" maxlength="4"/></td> 
 </tr> 
 <tr> 
 <td colspan="2"><h3 align="center">Les candidats </h3></td> 
 </tr> 
 <tr> 
 <td> <strong>Filles</strong></td> 
 <td> <strong>Garçons</strong></td> 
 </tr> 
<?php 
   /*$candidats = array(
    "Fille 1",
    "Fille 2",
    "Fille 3",
    );
foreach ($candidats as $candidatf) {
    echo '<tr>';
    echo '<td><input type="radio" name="candidat" value="' . $candidatf . '">' . $candidatf . '</td>';
    echo '</tr>';
}
$candidats = array(
    "Garcon 1",
    "Garcon 2",    
    "Garcon 2",
);
foreach ($candidats as $candidatg) {
    echo '<tr>';
    echo '<td><input type="radio" name="candidat" value="' . $candidatg . '">' . $candidatg . '</td>';
    echo '</tr>';
}
$file = fopen("eleves.txt", "r");
$numerosExistant = array();
    while (($line = fgets($file)) !== false) {
        $data = explode("#", $line);
        $numerosExistant[] = $data[0;
   
    fclose($file); }
    $eleves = file("eleves.txt");
    $filles = [];
    $garcons = [];
  
    foreach ($eleves as $eleve) {
      $data = explode("#", $eleve);
      $nom = $data[1];
      $prenom = $data[2];
      $sexe = $data[3];
  
      if ($sexe === "F") {
        $filles[] = $nom . ' ' . $prenom;
      } else if ($sexe === "G") {
        $garcons[] = $nom . ' ' . $prenom;
      }
    }
   foreach ($filles as $candidat) {
        echo '<tr>';
        echo '<td><input type="radio" name="candidat" value="' . $candidat . '">' . $candidat . '</td>';
        echo '</tr>';
    }
  
   foreach ($garcons as $candidat) {
        echo '<td><input type="radio" name="candidat" value="' . $candidat . '">' . $candidat . '</td>';
    }
 ?> */
 /*$eleves = file("eleves.txt", FILE_IGNORE_NEW_LINES);
            foreach ($eleves as $eleve) {
                $details = explode("#", $eleve);
                if ($details[5] == "O") { // Vérifier si l'élève est un candidat
                    if ($details[3] == "F") {
                        echo '<tr><td><input type="radio" name="candidat" value="' . $details[0] . '">' . $details[1] . ' ' . $details[2] . '</td><td></td></tr>';
                    } else {
                        echo '<tr><td></td><td><input type="radio" name="candidat" value="' . $details[0] . '">' . $details[1] . ' ' . $details[2] . '</td></tr>';
                    }
                }
            }
            ?>*/
            function chercherEleve($numero) {
              $eleves = file("eleves.txt", FILE_IGNORE_NEW_LINES); 
              foreach ($eleves as $eleve) {
                  $details = explode("#", $eleve); 
                  if ($details[0] == $numero) {
                      return $details; 
                  }
              }
              return false; 
          }
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $electeur = $_POST['num'];
            $eleve = chercherEleve($electeur);}
            if (!$eleve) {
                echo "Vous n'êtes pas inscrit.";
                exit;
            }
        
            
            $votes = file("votes.txt", FILE_IGNORE_NEW_LINES);
            foreach ($votes as $vote) {
                $details = explode("#", $vote);
                if ($details[1] == $electeur) {
                    echo "Vous avez déjà voté.";
                    exit;
                }
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $electeur = $_POST['num'];
                $eleve = chercherEleve($electeur);
              if (!$eleve) {
                  echo "Vous n'êtes pas inscrit.";
                  exit;
              }
              $votes = file("votes.txt", FILE_IGNORE_NEW_LINES);
              foreach ($votes as $vote) {
                  $details = explode("#", $vote);
                  if ($details[1] == $electeur) {
                      echo "Vous avez déjà voté.";
                      exit;
                  }
              }
              $candidat = $_POST['candidat'];
              $nouveauVote = $candidat . "#" . $electeur . "\n";
              file_put_contents("votes.txt", $nouveauVote, FILE_APPEND);
          
              echo "Vote enregistré avec succès.";
          } else {
              echo "Erreur: le formulaire n'a pas été soumis.";
          }
   ?>       

 <tr> 
 <td><input type="submit" name="Submit" value="Voter" /></td> 
 <td><input type="reset" name="reset" value="Annuler" /></td> 
 </tr> 
</table> 
</form> 
</body>
</html>