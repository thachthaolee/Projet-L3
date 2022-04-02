<?php // content="text/plain; charset=utf-8"
// Bibliotheque
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_bar.php');

$bdd = new PDO('mysql:host=localhost;dbname=hapmap;charset=utf8', 'root', 'root');

// Donnees 
$donnees = $bdd -> query('SELECT score.Nom_Score, avoir.valeur_score
				FROM score, avoir, pays, continent, annee
				WHERE score.Id_Score = avoir.Id_Score
				AND avoir.Id_Pays = pays.Id_Pays
				AND pays.Id_Continent = continent.Id_Continent
				AND annee.Annee= avoir.annee
				AND score.Id_Score != 1
				AND pays.Id_Pays="'. $_GET["id_pays1"] . '"
				AND annee.Annee = ' . $_GET["annee"] . '
				GROUP by score.Id_Score
				order by score.Id_Score');
		
$score = array();
$valeurs = array();
while ($ligne = $donnees ->fetch()) {
	$score[] = $ligne[0];
	$valeurs[] = $ligne[1];
}
$donnees2 = $bdd -> query('SELECT score.Nom_Score, avoir.valeur_score
				FROM score, avoir, pays, continent, annee
				WHERE score.Id_Score = avoir.Id_Score
				AND avoir.Id_Pays = pays.Id_Pays
				AND pays.Id_Continent = continent.Id_Continent
				AND annee.Annee= avoir.annee
				AND score.Id_Score != 1
				AND pays.Id_Pays="'. $_GET["id_pays2"] . '"
				AND annee.Annee = ' . $_GET["annee"] . '
				GROUP by score.Id_Score
				order by score.Id_Score');
		
$score2 = array();
$valeurs2 = array();
while ($ligne = $donnees2 ->fetch()) {
	$score2[] = $ligne[0];
	$valeurs2[] = $ligne[1];
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
$dcr2 = array();
for($i=0; $i<count($ecart); $i++){
	$dcr1[$i] = $valeurs[$i]/$ecart[$i];
	$dcr2[$i] = $valeurs2[$i]/$ecart[$i];
}


// Create the graph. These two calls are always required
$graph = new Graph(900,300);
$graph->SetScale("textlin");

// Add a drop shadow
$graph->SetShadow();

// Adjust the margin a bit to make more room for titles
$graph->img->SetMargin(40,30,20,40);

$graph->xaxis->SetTickLabels($score2);

// Create a bar pot
$b1plot = new BarPlot($dcr1);
$b1plot->SetFillColor("orange");
$b2plot = new BarPlot($dcr2);
$b2plot->SetFillColor("blue");

$gbplot = new GroupBarPlot(array($b1plot,$b2plot));

$graph->Add($gbplot);

// Setup the titles
//$graph->title->Set("A simple bar graph");


$graph->title->SetFont(FF_FONT1,FS_BOLD);


// Display the graph
$graph->Stroke();
?>