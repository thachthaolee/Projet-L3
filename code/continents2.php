<!DOCTYPE html>
<html>
	<head>
		<meta  http-equiv="Content-Type" content="text/html; charset="utf-8" />
		<link rel="stylesheet" href="Style/StyleHapMap.css?" type="text/css" media="screen" />
		<title>Continents</title>
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
					<li><a id="ici" href="continents1.php">Continent</a></li>
					<li><a href="comparer.php">Compare</a></li>
					<li><a href="scores.php">Score</a></li>
					<li><a href="apropos.html">About us</a></li>
                    <!--Rajouter la fonction rechercher-->
                </ul>
            </nav>

    </header>
	
	<div class="test">
		
		<?php 	require ('bd.php');
				$bdd = getBD();

				$continent = $_GET['id_continent'];

				$rep = $bdd->query("SELECT * FROM continent WHERE Id_Continent= $continent");
							
				while ($mat=$rep-> fetch()){	
					echo "<h1>".$mat['Nom_Continent']."</h1></br>";
					}
		?>		
		
		<center>
		<?php
				echo '<img src="graphe.php?id_continent='.$_GET["id_continent"].'&annee='.$_GET["annee"].'">' // call the fonction graphe as photo
		?>
		
		</br>		
		<?php
			 $rep = $bdd -> query('SELECT AVG(avoir.valeur_score) as moyenne, score.Nom_Score as nom
												FROM score, avoir, pays, continent, annee
												WHERE score.Id_Score = avoir.Id_Score
												AND avoir.Id_Pays = pays.Id_Pays
												AND pays.Id_Continent = continent.Id_Continent
												AND annee.Annee= avoir.annee
												AND score.Id_Score != 1
												AND continent.Id_Continent="'. $_GET["id_continent"] . '"
												AND annee.Annee ="' . $_GET["annee"] . '"
												GROUP by score.Id_Score
												order by score.Id_Score');
												
												
			 $score = array();
			 $moyenne = array();
			 while ($ligne =$rep ->fetch()){
				 $score[]=$ligne['nom'];
				 $moyenne[]=$ligne['moyenne'];
				 echo '<div class="indice"><p>'.$ligne['nom']."</p>";
				 echo "<p>".$ligne['moyenne']."</p></div>";
			 }
			 
			 $rep -> closeCursor();
			 
		?>
		</center>
		
		<?php			
			echo '<div class="continents2">';
			$rep = $bdd->query("SELECT Nom_Pays, Id_Pays FROM pays WHERE Id_Continent = $continent");
			while ($ligne = $rep -> fetch()) {
				echo "<li class='gros'><a href=continents3.php?id_pays=".$ligne['Id_Pays']."&annee=".$_GET['annee'].">".$ligne['Nom_Pays']."</a></li>";}
				
				$rep -> closeCursor();
				echo "</div>";
			?>
					
	</div>		
	
</body>
</html>