<!DOCTYPE html>

<html>

<?php
require('../HapMap/bd.php');
$bdd = getBD();
$pays1 = $_POST['pays1'];
$pays2 = $_POST['pays2'];
$annee = $_POST['annee'];
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Enregistrement </title>

</head>

<body>
    <?php
        //recuperation vecteur nom des indices pays 1 :
        $req = $bdd->query('SELECT score.Nom_Score
        FROM pays, avoir, score, annee
        WHERE pays.Nom_Pays ="'.$pays1.'"
        AND annee.Annee ="'.$annee.'" 
        AND annee.Annee = avoir.annee
        AND avoir.Id_Score=score.Id_Score
        AND avoir.Id_Pays = pays.Id_Pays');
        while ($ligne = $req ->fetch()) {
	        echo $ligne['Nom_Score']."<br/>\n";
		    }
	    $req ->closeCursor();
        
        echo "<br/>";

        //recuperation vecteur nom des indices pays 2 :
        $req = $bdd->query('SELECT score.Nom_Score
        FROM pays, avoir, score, annee
        WHERE pays.Nom_Pays ="'.$pays2.'"
        AND annee.Annee ="'.$annee.'" 
        AND annee.Annee = avoir.annee
        AND avoir.Id_Score=score.Id_Score
        AND avoir.Id_Pays = pays.Id_Pays');
        while ($ligne = $req ->fetch()) {
	        echo $ligne['Nom_Score']."<br/>\n";
		    }
	    $req ->closeCursor();

        echo "<br/>";

        //recuperation vecteur scores des indices pays 1 :
        $req = $bdd->query('SELECT avoir.valeur_score
        FROM pays, avoir, score, annee
        WHERE pays.Nom_Pays ="'.$pays1.'"
        AND annee.Annee ="'.$annee.'" 
        AND annee.Annee = avoir.annee
        AND avoir.Id_Score=score.Id_Score
        AND avoir.Id_Pays = pays.Id_Pays');
        while ($ligne = $req ->fetch()) {
	        echo $ligne['valeur_score']."<br/>\n";
		    }
	    $req ->closeCursor();

        echo "<br/>";

        //recuperation vecteur scores des indices pays 2 :
        $req = $bdd->query('SELECT avoir.valeur_score
        FROM pays, avoir, score, annee
        WHERE pays.Nom_Pays ="'.$pays2.'"
        AND annee.Annee ="'.$annee.'" 
        AND annee.Annee = avoir.annee
        AND avoir.Id_Score=score.Id_Score
        AND avoir.Id_Pays = pays.Id_Pays');
        while ($ligne = $req ->fetch()) {
	        echo $ligne['valeur_score']."<br/>\n";
		    }
	    $req ->closeCursor();
    ?>
</body>

</html>