<!DOCTYPE html>

<html>
<head>
    <meta  http-equiv="Content-Type" content="text/html; charset="utf-8" />
    <link rel="stylesheet" href="Style/continent1.css" type="text/css" media="screen" />
    <title>Continent</title>
</head>

<body>
<?php
	require ('bd.php');
	$bdd = getBD();

	$id = $_GET['id_continent'];

	$rep = $bdd->query("SELECT * FROM continent WHERE Id_Continent= $id");
	
	while ($mat=$rep-> fetch()){	
		echo "<h1>".$mat['Nom_Continent']."</h1></br>";
	}
?>
		<center>
			</br>
			</br>
			</br>
			</br>
			</br>
				<p>
				</br>
				</br>
				</br>
				</br>	
					<?php
						echo '<img src="graphe.php?continent='.$_GET["continent"].'&annee='.$_GET["annee"].'">' // call the fonction graphe
					?>
				
				</p>
		</center>
		
		<?php
						function getBD(){
							$bdd = new PDO('mysql:host=localhost;dbname=HapMap;charset=utf8', 'root', 'root'); 
							return $bdd;
						}
						
						$bdd=getBD();

						
						$rep = $bdd -> query('SELECT AVG(avoir.valeur_score) as moyenne, score.Nom_Score as nom
												FROM score, avoir, pays, continent, annee
												WHERE score.Id_Score = avoir.Id_Score
												AND avoir.Id_Pays = pays.Id_Pays
												AND pays.Id_Continent = continent.Id_Continent
												AND annee.Annee= avoir.annee
												AND continent.Nom_Continent="'. $_GET["continent"] . '"
												AND annee.Annee ="' . $_GET["annee"] . '"
												GROUP by score.Id_Score
												order by score.Id_Score');
												
						$score = array();
						$moyenne = array();
						while ($ligne = $rep ->fetch()) {
							$score[] = $ligne['moyenne'];
							$moyenne[] = $ligne['nom'];
							//echo "<pa>". $ligne['moyenne']." ".$ligne['nom']."</pa>";
							echo "<pa>".$ligne['nom']."</pa>";
							echo "<pa>".$ligne['moyenne']."</pa>";
						}

	echo '<div class="continents2">';
	$rep = $bdd->query("SELECT Nom_Pays, Id_Pays FROM pays WHERE Id_Continent = $id");
	while ($ligne = $rep -> fetch()) {
        echo "<li><a href=continents3.php?id_pays=".$ligne['Id_Pays'].">".$ligne['Nom_Pays']."</a></li>";
    }


   
	$rep -> closeCursor();
	echo "</div>";
?>
	
	</body>
</html>