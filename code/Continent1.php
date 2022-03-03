<!DOCTYPE html>

<html>
<head>
    <meta  http-equiv="Content-Type" content="text/html; charset="utf-8" />
    <link rel="stylesheet" href="continent1.css" type="text/css" media="screen" />
    <title>Continent</title>
</head>

<body>
<ul>
<?php
    require ('bd.php');
    $bdd = getBD();

    $rep = $bdd -> query('SELECT Nom_Continent FROM continent');
    while ($ligne = $rep -> fetch()) {
        echo "<li>".$ligne['Nom_Continent']."</li>";
    }
    $rep -> closeCursor();

?>
</ul>
</body>
</html>