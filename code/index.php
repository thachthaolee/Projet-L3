<!DOCTYPE html>
<html>
    <head>
        <?php
        require('bd.php');
        $bdd = getBD();
        ?>
        <title>HAPMAP</title>
        <meta http-equiv="Content-Type" 
            content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="Style/StyleHapmap.css?" type="text/css"
            media="screen" />

    </head>
    <body>
        <!-- menu bandeau début -->
        <header>
            <img src = "../HapMap/image/logo.png" alt = "Logo"/> 
            <nav>
            
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="#" >Continent</a></li>
                    <li><a href="comparer.php">Comparer</a></li>
                    <li><a href="#">Score</a></li>
                    <li><a href="#" >A propos</a></li>
                    <!--Rajouter la fonction rechercher-->
                </ul>
            </nav>

        </header>
        <!-- menu bandeau fin -->
        <h2 id="ScoreLeaders">Score Leaders</h2>
        <!--<h2>Famille</h2> Pour mettre au point css-->

        <!--formulaire pour filtres-->
<!--
        <form action="Accueil.php" method="get" autocomplete="off">
        <p>
            <INPUT type="number"name="annee"value=""min="2015"max="2019"placeholder="année">
        </p>
            
        <p>
            <input type="submit" value="Envoyer">
        </p>
        </form>
-->
        <?php
        #$annee = $_GET['annee'];
        ?>
<!--Mettre des filtres ici : année, score, continent...-->

        <table>
        <tr><td>Identifiant pays</td><td>Pays</td><!--En fonction d'un filtre, un score--><td>Valeur Score</td><td>Rang</td></tr>
                <? $rep = $bdd->query('SELECT * FROM avoir, pays');
                while ($ligne = $rep ->fetch()) {
                    echo "<tr><td>".$ligne['Id_Pays']."</td><td>"."<a href="."Scores/scores.php?id_Pays=".$ligne['Id_Pays'].">".$ligne['Nom_Pays']."</a>"."</td><td>".$ligne['valeur_score']."</td><td>".$ligne['rang']."</td></tr>";
                    }
                    $rep ->closeCursor(); 
                    ?>
        </table>


    </body>
</html>