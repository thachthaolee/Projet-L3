<!DOCTYPE html>
<html>
	<head>
		<meta  http-equiv="Content-Type" content="text/html; charset="utf-8" />
		<link rel="stylesheet" href="Style/StyleHapMap.css?" type="text/css" media="screen" />
		<title>Continents</title>
	</head>

	
<body>
	
	<header>
			<a href ="index.php"><img src = "image/logo.png" alt = "Logo"/></a>
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
	<br/><br/><br/>
	
	
		
		<?php 	require ('bd.php');
				$bdd = getBD();

				$pays = $_GET['id_pays'];

				$rep = $bdd->query("SELECT * FROM pays WHERE Id_Pays= $pays");
							
				while ($mat=$rep-> fetch()){	
					$nompays = $mat['Nom_Pays'];
				}
				$rep->closeCursor();
				echo "<h1>".$nompays."</h1></br>";
		?>		<br/>
		
		
	<center>	

		<?php
			
		?>
		
		
		</br>	
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
				
											   }
												
											   $rep -> closeCursor();

			if($moyenne[0]=="" && $_GET['annee']!='avg'){
				echo "<p class='indispo'>Données indisponibles pour le pays ".$nompays." en ".$_GET['annee']."</p>";
                echo '<meta http-equiv="refresh" content="3; url=continents1.php">';
			}else{
				echo '<div id="graphe">';
			echo '<img id="img_graphe" src="graphe1.php?id_pays='.$_GET["id_pays"].'&annee='.$_GET["annee"].'">'; // call the fonction graphe1 as photo
			echo '</div>';
			if($_GET['annee']=='avg'){
				$rep = $bdd -> query('SELECT AVG(avoir.valeur_score) as moyenne, score.Nom_Score as nom
												FROM score, avoir, pays, continent, annee
												WHERE score.Id_Score = avoir.Id_Score
												AND avoir.Id_Pays = pays.Id_Pays
												AND pays.Id_Continent = continent.Id_Continent
												AND annee.Annee= avoir.annee
												AND score.Id_Score != 1
												AND pays.Id_Pays="'. $_GET["id_pays"] . '"
									
												GROUP by score.Id_Score
												order by score.Id_Score');
												
												
												$score = array();
												$moyenne = array();
												while ($ligne =$rep ->fetch()){
													$score[]=$ligne['nom'];
													$moyenne[]=$ligne['moyenne'];
				
											   }
												
											   $rep -> closeCursor();
											   for($i=0; $i < count($score); $i++){
												echo '<div class="indice"><p>'.$score[$i]."</p>";
												echo '<p>'.$moyenne[$i]."</p></div>";
											}

			}else{
				for($i=0; $i < count($score); $i++){
					echo '<div class="indice"><p>'.$score[$i]."</p>";
					echo '<p>'.$moyenne[$i]."</p></div>";
				}
			}
			
			
			
			}

				

			//Lien vers  comparer.php
			$rep = $bdd->query("SELECT * FROM pays WHERE Id_Pays= $pays");
							
				while ($mat=$rep-> fetch()){	
					echo "<br/><br/><a href='deco.php?pays1=".$mat['Nom_Pays']."&continent=1'><h3>Compare</h3></a></br>";

				}
				$rep->closeCursor();

			if($_GET['annee']=='avg'){
				echo '<p class = "avg">* These data represent an average of the indicators over different years from 2015 to 2019<p>';
			}
			
		?>
	</center>	
	
			
	</div>		
	
</body>
</html>