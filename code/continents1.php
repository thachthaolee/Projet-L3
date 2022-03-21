<!DOCTYPE html>

<html>
<head>
    <meta  http-equiv="Content-Type" content="text/html; charset="utf-8" />
    <link rel="stylesheet" href="Style/StyleHapMap.css" type="text/css" media="screen" />
    <title>Continent</title>
</head>

<style>
	#ici{
		color: #148EFF;
		border-bottom: 2px solid #148EFF;
    }
</style>

<body>
	<header>
            <img src = "image/logo.png" alt = "Logo"/> 
            <nav>
            
                <ul>
                    <li><a href="index.php">Home page</a></li>
					<li><a href="continents1.php">Continent</a></li>
					<li><a href="comparer.php">Compare</a></li>
					<li><a href="scores.php">Score</a></li>
					<li><a id="ici" href="apropos.html">About us</a></li>
                    <!--Rajouter la fonction rechercher-->
                </ul>
            </nav>

    </header>
	
		<div class="test">
	
		<form action="continents1.php" method="get" autocomplete="off">

		<p>Please select a year : <INPUT id = "annee" type="number" name="annee" value="" min="2015" max="2019" placeholder="year"></p>
		<p><?php echo "You have chosen ".$_GET['annee'];?></p>
		</form>
	
	
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
		</div>
		
</body>
</html>
