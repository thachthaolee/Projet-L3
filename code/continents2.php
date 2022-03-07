<!DOCTYPE html>
<html>
	<head>
		<meta  http-equiv="Content-Type" content="text/html; charset="utf-8" />
		<link rel="stylesheet" href="Style/style.css" type="text/css" media="screen" />
		<title>Continents</title>
	</head>
	
	<body>
		
		<?php 	require ('bd.php');
				$bdd = getBD();

				$continent = $_GET['id_continent'];

				$rep = $bdd->query("SELECT * FROM continent WHERE Id_Continent= $continent");
							
				while ($mat=$rep-> fetch()){	
					echo "<h1>".$mat['Nom_Continent']."</h1></br>";
					}
		?>		
		
		<?php
				echo '<img src="graphe.php?id_continent='.$_GET["id_continent"].'&annee='.$_GET["annee"].'">' // call the fonction graphe
		?>
				
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
				 echo "<pa>".$ligne['nom']."</pa>";
				 echo "<pa>".$ligne['moyenne']."</pa>";
			 }
			 
			 $rep -> closeCursor();
			 
			?>
		
		
		<?php			
			echo '<div class="continents2">';
			$rep = $bdd->query("SELECT Nom_Pays, Id_Pays FROM pays WHERE Id_Continent = $continent");
			while ($ligne = $rep -> fetch()) {
				echo "<li><a href=continents3.php?id_pays=".$ligne['Id_Pays'].">".$ligne['Nom_Pays']."</a></li>";}
				
				$rep -> closeCursor();
				echo "</div>";
			?>
					
					
	</body>
</html>