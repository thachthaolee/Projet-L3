<!DOCTYPE html>

<html>

<head>
    <?php include('bd.php'); 
    $bdd = getBD();?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="Style/StyleHapmap.css" type="text/css" media="screen" />
    <title> Scores </title>
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
                    <li><a href="index.php">Home page</a></li>
					<li><a href="continents1.php">Continent</a></li>
					<li><a href="comparer.php">Compare</a></li>
					<li><a id="ici" href="scores.php">Score</a></li>
					<li><a href="apropos.html">About us</a></li>
                    <!--Rajouter la fonction rechercher-->
                </ul>
            </nav>

        </header>
<table border="1">

<?php 

$rep = $bdd->query('select id_Score, Nom_Score from score');

while ($ligne = $rep ->fetch()) {
    if($ligne['Nom_Score'] != "Hapiness Rank" && $ligne['Nom_Score'] != "Hapiness Score") {
	    echo "<tr><td>"."<a href="."indices.php?id_Score=".$ligne["id_Score"].">".$ligne['Nom_Score']."</a>"."</td></tr>";
    }    
}

$rep ->closeCursor();
?>

</body>

</html>