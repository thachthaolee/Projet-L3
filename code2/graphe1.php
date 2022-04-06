<?php 
// Bibliotheque
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_bar.php');

//Conection avec la base de données
$bdd = new PDO('mysql:host=localhost;dbname=hapmap;charset=utf8', 'root', 'root');

//requete SQL pour la sélection des éléments
if($_GET['annee']=='avg'){ // creation du graphe moeynne pour les annees 2015-2019 
	$donnees = $bdd -> query('SELECT score.Nom_Score, AVG(avoir.valeur_score)
				FROM score, avoir, pays, continent, annee
				WHERE score.Id_Score = avoir.Id_Score
				AND avoir.Id_Pays = pays.Id_Pays
				AND pays.Id_Continent = continent.Id_Continent
				AND annee.Annee= avoir.annee
				AND score.Id_Score != 1
				AND score.Id_Score != 2
				AND pays.Id_Pays="'. $_GET["id_pays"] . '"
				GROUP by score.Id_Score
				order by score.Id_Score');
					
	$score = array();
	$valeurs = array();
	while ($ligne = $donnees ->fetch()) {
		$score[] = $ligne[0];
		$valeurs[] = $ligne[1];
	}
}
else{
	$donnees = $bdd -> query('SELECT score.Nom_Score, AVG(avoir.valeur_score)
				FROM score, avoir, pays, continent, annee
				WHERE score.Id_Score = avoir.Id_Score
				AND avoir.Id_Pays = pays.Id_Pays
				AND pays.Id_Continent = continent.Id_Continent
				AND annee.Annee= avoir.annee
				AND score.Id_Score != 1
				AND score.Id_Score != 2
				AND pays.Id_Pays="'. $_GET["id_pays"] . '"
				AND annee.Annee = ' . $_GET["annee"] . '
				GROUP by score.Id_Score
				order by score.Id_Score');
		
	$score = array();
	$valeurs = array();
	while ($ligne = $donnees ->fetch()) {
		$score[] = $ligne[0];
		$valeurs[] = $ligne[1];
	}
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