<!DOCTYPE html>

<html>
<head>
    <meta  http-equiv="Content-Type" content="text/html; charset="utf-8" />
    <link rel="stylesheet" href="Style/style.css" type="text/css" media="screen" />
    <title>Continent</title>
</head>

<body>
<form action="continents1.php" method="get" autocomplete="off">

<p>Veuillez saisir une année : <INPUT id = "annee" type="number" name="annee" value="" min="2015" max="2019" placeholder="année"></p>
<p><?php echo "Vous avez choisi ".$_GET['annee'];
	?></p>
	
	
<div class="continents1">
<?php
    require ('bd.php');
    $bdd = getBD();

    $rep = $bdd -> query('SELECT * FROM continent');
    while ($ligne = $rep -> fetch()) {
        echo "<li><a href=continents2.php?id_continent=".$ligne['Id_Continent']."&annee=".$_GET['annee'].">".$ligne['Nom_Continent']."</a></li>";
    }
    
    
    $rep -> closeCursor();

?>
</div>
</body>
</html>
