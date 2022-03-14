<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="Style/StyleHapmap.css" type="text/css" media="screen" />
    <title> Indices </title>
    <style>
            #ici{
    color: #148EFF;
    border-bottom: 2px solid #148EFF;
}
        </style>
</head>

<body>

<header>
            <img src = "image/logo.png" alt = "Logo"/> 
            <nav>
            
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="#" >Continent</a></li>
                    <li><a href="comparer.php">Comparer</a></li>
                    <li><a id = "ici" href="scores.php">Score</a></li>
                    <li><a href="apropos.html" >A propos</a></li>
                    <!--Rajouter la fonction rechercher-->
                </ul>
            </nav>

        </header>

<?php
require('bd.php');
$PDO = getBD();

$id_Score = $_GET['id_Score'];

$rep = $PDO -> query("SELECT * FROM score WHERE score.id_Score={$id_Score}");

$ligne = $rep->fetch();

echo "<h2>".$ligne['Nom_Score']."</h2>";
echo "<br>";
echo "La mesure dans laquelle ".$ligne['Nom_Score']." contribue au calcul du score de bonheur";
echo "<a href='classement.php'><h3> Classement </h3></a></li>";
echo "<a href='carte.php'><h3> Carte </h3></a></li>";
echo "<br>";

?>