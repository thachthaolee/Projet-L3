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

	$id = $_GET['id_pays'];

	$rep = $bdd->query("SELECT * FROM pays WHERE Id_Pays= $id");
	
	while ($mat=$rep-> fetch()){	
		echo "<h1>".$mat['Nom_Pays']."</h1></br>";
	}
	
	$rep -> closeCursor();
?>
</body>
</html>