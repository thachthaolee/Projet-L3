<?php 
// Bibliotheque
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_bar.php');

//Conection avec la base de données
$bdd = new PDO('mysql:host=localhost;dbname=hapmap;charset=utf8', 'root', 'root');

//requete SQL pour la sélection des éléments
$donnees = $bdd -> query('SELECT score.Nom_Score, AVG(avoir.valeur_score)
				FROM score, avoir, pays, continent, annee
				WHERE score.Id_Score = avoir.Id_Score
				AND avoir.Id_Pays = pays.Id_Pays
				AND pays.Id_Continent = continent.Id_Continent
				AND annee.Annee= avoir.annee
				AND score.Id_Score != 1
				AND score.Id_Score != 2
				AND continent.Id_Continent="'.$_GET["id_continent"].'"
				AND annee.Annee = '.$_GET["annee"].'
				GROUP by score.Id_Score
				order by score.Id_Score');

// creation des tables score et valeurs 		
$score = array();
$valeurs = array();
while ($ligne = $donnees ->fetch()) {
	$score[] = $ligne[0];
	$valeurs[] = $ligne[1];
}

// Create the graph. These two calls are always required
$graph = new Graph(900,300);
$graph->SetScale("textlin");

// Add a drop shadow
$graph->SetShadow();

// Adjust the margin a bit to make more room for titles
$graph->img->SetMargin(40,30,20,40);
$graph->xaxis->SetTickLabels($score);

// Create a bar pot
$bplot = new BarPlot($valeurs);
$graph->Add($bplot);

// Display the graph
$graph->Stroke();
?>