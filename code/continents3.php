<!DOCTYPE html>
<html>
	<head>
		<meta  http-equiv="Content-Type" content="text/html; charset="utf-8" />
		<link rel="stylesheet" href="Style/StyleHapMap.css" type="text/css" media="screen" />
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
                    <li><a href="index.php">Accueil</a></li>
                    <li><a id = "ici" href="continents1.php" >Continent</a></li>
                    <li><a href="comparer.php">Comparer</a></li>
                    <li><a href="scores.php">Score</a></li>
                    <li><a href="apropos.html" >A propos</a></li>
                    <!--Rajouter la fonction rechercher-->
                </ul>
            </nav>

    </header>
	
	<div class="test">
		
		<?php 	require ('bd.php');
				$bdd = getBD();

				$pays = $_GET['id_pays'];

				$rep = $bdd->query("SELECT * FROM pays WHERE Id_Pays= $pays");
							
				while ($mat=$rep-> fetch()){	
					echo "<h1>".$mat['Nom_Pays']."</h1></br>";
					}
		?>		
		
		
		
		<?php
				echo '<img src="graphe1.php?id_pays='.$_GET["id_pays"].'&annee='.$_GET["annee"].'">' // call the fonction graphe1 as photo
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
												AND pays.Id_Pays="'. $_GET["id_pays"] . '"
												AND annee.Annee ="' . $_GET["annee"] . '"
												GROUP by score.Id_Score
												order by score.Id_Score');
												
												
			 $score = array();
			 $moyenne = array();
			 while ($ligne =$rep ->fetch()){
				 $score[]=$ligne['nom'];
				 $moyenne[]=$ligne['moyenne'];
				 echo '<div class="indice"><p>'.$ligne['nom']."</p>";
				 echo '<p>'.$ligne['moyenne']."</p></div>";
			 }
			 
			 $rep -> closeCursor();
			 
			?>
			
	</div>		
	
</body>
</html>