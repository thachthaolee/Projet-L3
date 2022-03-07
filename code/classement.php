<!DOCTYPE html>

<html>

<head>
    <?php include('bd.php'); 
    $bdd = getBD();?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="Style/StyleHapmap.css" type="text/css" media="screen" /> -->
    <title> Classement </title>
</head>

<body>

<header>
        <img src = "../HapMap/image/logo.png" alt = "Logo"/> 
        <nav>
        
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#" >Continent</a></li>
                <li><a href="comparer.php">Comparer</a></li>
                <li><a href="scores.php">Score</a></li>
                <li><a href="apropos.html" >A propos</a></li>
                <!--Rajouter la fonction rechercher-->
            </ul>
        </nav>

    </header>

<h2> Classement </h2>

<!--
<form method="get" action="classement.php" autocomplete="off">
    <INPUT type="number" name="annee" value="2015" min="2015" max="2019">
</form>
-->
<table border="1">
<tr><th>Rang</th>
<th>Pays</th>
<th>Score</th>
</tr>

<?php 

//$annee = $_GET['annee'];

$rep = $bdd->query('SELECT avoir.rang, pays.Nom_Pays, avoir.valeur_score
                    FROM avoir, pays, score 
                    WHERE pays.Id_Pays=avoir.Id_Pays
                    AND score.Id_Score=avoir.Id_Score
                    AND avoir.annee=2017
                    AND score.Id_Score=4
                    ORDER BY avoir.valeur_score DESC');


while ($ligne = $rep ->fetch()) {
    echo "<tr><td>".
    $ligne['rang']."</td><td>".
    $ligne['Nom_Pays']."</td><td>".
    $ligne['valeur_score']."</td></tr>";
}

$rep ->closeCursor();
?>

</body>

</html>

















<!-- SELECT avoir.rang, pays.Nom_Pays, avoir.valeur_score
FROM avoir, pays, score 
WHERE pays.Id_Pays=avoir.Id_Pays
AND score.Id_Score=avoir.Id_Score
AND avoir.annee=2015
AND score.Id_Score=3
ORDER BY avoir.valeur_score DESC
-->