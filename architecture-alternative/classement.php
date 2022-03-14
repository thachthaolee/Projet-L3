<!DOCTYPE html>

<html>

<head>
    <?php;
    include('bd.php'); 
    $bdd = getBD();?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="Style/StyleHapmap.css?" type="text/css" media="screen" />
    <title> Classement </title>
</head>

<body>

<header>
    <img src = "image/logo.png" alt = "Logo"/> 
    <nav>
            
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="#" >Continent</a></li>
            <li><a href="comparer.php">Comparer</a></li>
            <li><a href="scores.php">Score</a></li>
            <li><a href="apropos.html" >A propos</a></li>
            <!--Rajouter la fonction rechercher-->
        </ul>
    </nav>

</header> 

<h2> Classement </h2>

<form method="get" action="classement2.php" autocomplete="off">
    <INPUT type="number" name="annee" value="" min="2015" max="2019">
</form>


<table border="1">
<tr><th>Rang</th>
<th>Pays</th>
<th>Score</th>
</tr>

</body>

</html>