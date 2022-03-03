<!DOCTYPE html>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="../Style/StyleHapmap.css" type="text/css" media="screen" /> -->
<title> Indices </title>
</head>

<body>

<?php
require('bd_wamp.php');
$PDO = getBD();

$id_Score = $_GET['id_Score'];

$rep = $PDO -> query("SELECT * FROM score WHERE score.id_Score={$id_Score}");

$ligne = $rep->fetch();

echo "<h2>".$ligne['Nom_Score']."</h2>";
echo "<br>";
echo "La mesure dans laquelle ".$ligne['Nom_Score']." contribue au calcul du score de bonheur";
echo "<h3> Classement </h3>";
echo "<h3> Carte </h3>";
echo "<br>";

?>