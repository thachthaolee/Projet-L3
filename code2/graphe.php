<?php // content="text/plain; charset=utf-8"
// Bibliotheque
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_bar.php');

$bdd = new PDO('mysql:host=localhost;dbname=hapmap;charset=utf8', 'root', 'root');

// Donnees 
$donnees = $bdd -> query('SELECT score.Nom_Score, AVG(avoir.valeur_score)
				FROM score, avoir, pays, continent, annee
				WHERE score.Id_Score = avoir.Id_Score
				AND avoir.Id_Pays = pays.Id_Pays
				AND pays.Id_Continent = continent.Id_Continent
				AND annee.Annee= avoir.annee
				AND score.Id_Score != 1
				AND continent.Id_Continent="'.$_GET["id_continent"].'"
				AND annee.Annee = '.$_GET["annee"].'
				GROUP by score.Id_Score
				order by score.Id_Score');
		
$score = array();
$valeurs = array();
while ($ligne = $donnees ->fetch()) {
	$score[] = $ligne[0];
	$valeurs[] = $ligne[1];
}

$donnees3 = $bdd -> query('SELECT STD(avoir.valeur_score)
FROM avoir, score, annee
WHERE avoir.annee = '.$_GET['annee'].'
AND score.Id_Score != 1
and avoir.Id_Score=score.Id_Score 
GROUP BY score.Id_Score');
$ecart= array();
while ($ligne = $donnees3 ->fetch()) {
	$ecart[] = $ligne[0];
}
$dcr1 = array();
for($i=0; $i<count($ecart); $i++){
	$dcr1[$i] = $valeurs[$i]/$ecart[$i];
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
$bplot = new BarPlot($dcr1);
$graph->Add($bplot);

// Setup the titles
//$graph->title->Set("A simple bar graph");
//$graph->xaxis->title->Set("X-title");
//$graph->yaxis->title->Set("Y-title");

//$graph->title->SetFont(FF_FONT1,FS_BOLD);
//$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
//$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);

// Display the graph
$graph->Stroke();
?>