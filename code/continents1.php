<!DOCTYPE html>

<html>
<head>
    <meta  http-equiv="Content-Type" content="text/html; charset="utf-8" />
    <link rel="stylesheet" href="Style/continent1.css" type="text/css" media="screen" />
    <title>Continent</title>
</head>

<body>
<ul>
<?php
    require ('bd.php');
    $bdd = getBD();

    $rep = $bdd -> query('SELECT * FROM continent');
    while ($ligne = $rep -> fetch()) {
        echo "<li><a href=continents2.php?id_continent=".$ligne['Id_Continent'].">".$ligne['Nom_Continent']."</a></li>";
    }
    $rep -> closeCursor();

?>
</ul>
</body>
</html>
