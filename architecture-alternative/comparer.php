<!DOCTYPE html>

<html>
    <?php
        require('bd.php');
        $bdd = getBD();
    ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="Style/StyleHapmap.css?" type="text/css" media="screen" />
        <title>
            Comparer
        </title>
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
        
        <form action="comparaison.php" method="post" autocomplete="off">
            <div id = "conteneur1">
                <p class = "colp1">
                <INPUT class="casepays" id ="pays1" type="text"name="pays1" placeholder="Sélectionner" value=
                <?php if(isset($_GET['pays1']))
			            echo "'".$_GET['pays1']."'";
		            else
			            echo "''"; ?> >
                </p>
                <p class = "colp1">
                <INPUT id = "annee" type="number"name="annee"value=""min="2015"max="2019"placeholder="année">
                </p>
                <p class = "colp1">
                <INPUT class="casepays" id ="pays2" type="text"name="pays2" placeholder="Sélectionner" value=
                <?php if(isset($_GET['pays2']))
			            echo "'".$_GET['pays2']."'";
		            else
			            echo "''"; ?> >
                </p>
            </div>
            <br/><br/><br/><br/>
            <p id = "bouton">
                <input id = "bouton_comparer" type="submit" value="Comparer">
            </p>
        </form>
        
    </body>
</html>