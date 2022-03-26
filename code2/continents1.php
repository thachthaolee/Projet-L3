<!DOCTYPE html>

<html>
<head>
    <meta  http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="Style/StyleHapMap.css" type="text/css" media="screen" />
    <title>Continent</title>
</head>



<body>
	<header>
            <img src = "image/logo.png" alt = "Logo"/> 
            <nav>
            
                <ul>
                    <li><a href="index.php">Home page</a></li>
					<li><a class="ici" href="continents1.php">Continent</a></li>
					<li><a href="comparer.php">Compare</a></li>
					<li><a href="scores.php">Score</a></li>
					<li><a href="apropos.html">About us</a></li>
                    <!--Rajouter la fonction rechercher-->
                </ul>
            </nav>

    </header>
	
		<div class="test">
		<?php
		if(!isset($_GET['annee'])){
		echo '
		<form action="continents1.php" method="get" autocomplete="off">
		<br/><br/><br/>
		<p>Please select a year :<br/><br/> <INPUT id = "annee" type="number" name="annee" value="" min="2015" max="2019" placeholder="year"></p>
		<INPUT type= "submit" value = "Validate">
		</form>';
		
		}else{
	
	
		echo '<div class="continents1">';
			echo '<br/><br/><br/><br/>Please select the continent for the year '.$_GET['annee'].' :<br/><br/><br/>';
			
				require ('bd.php');
				$bdd = getBD();

				$rep = $bdd -> query('SELECT * FROM continent');
				while ($ligne = $rep -> fetch()) {
					echo "<li class = 'lictn1'><a href=continents2.php?id_continent=".$ligne['Id_Continent']."&annee=".$_GET['annee'].">".$ligne['Nom_Continent']."</a></li>";
				}
				
				
				$rep -> closeCursor();

			
		echo '</div>';}?>
		</div>
		
</body>
</html>
