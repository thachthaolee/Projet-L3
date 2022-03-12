<!DOCTYPE html>

<html>
<head>
    <meta  http-equiv="Content-Type" content="text/html; charset="utf-8" />
    <link rel="stylesheet" href="Style/style.css" type="text/css" media="screen" />
    <title>Continent</title>
</head>

<body>
<?php
	require ('bd.php');
	$bdd = getBD();

	$id = $_GET['id_pays'];

	$rep = $bdd->query("SELECT * FROM pays WHERE Id_Pays= $id");
	
	while ($mat=$rep-> fetch()){	
		echo "<h1>".$mat['Nom_Pays']."</h1></br>";
	}
	
	$rep -> closeCursor();
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
					echo '<img src="graphe.php?id='.$_GET["pays"].'&annee='.$_GET["annee"].'">' // call the fonction graphe
			?>
			</p>
</center>

<?php
				require ('bd.php');
				$bdd = getBD();		
						
					

						
						$rep = $bdd -> query('SELECT AVG(avoir.valeur_score) as moyenne, score.Nom_Score as nom
												FROM score, avoir, pays, continent, annee
												WHERE score.Id_Score = avoir.Id_Score
												AND avoir.Id_Pays = pays.Id_Pays
												AND pays.Id_Continent = continent.Id_Continent
												AND annee.Annee= avoir.annee
												AND pays.Id_Pays="'. $_GET["pays"] . '"
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

						$rep -> closeCursor();
					?>
	

</body>
</html>