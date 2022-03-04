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
        <link rel="stylesheet" href="Style/StyleHapmap.css" type="text/css"
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
    

        <form class="formulaire_filtres" action="index.php" method="get" autocomplete="off">
        <p>
            <INPUT type="number"name="annee"value=""min="2015"max="2019"placeholder="année">
        
            <!--<INPUT type="text" name="FiltreScore" value="<?php echo $SCORE?>"placeholder="Sélectionner">-->
<!--Je prefererais passer par l'id score que le nom du score-->
            <SELECT name="test">
                <option valeur="">--Please choose a Score--</option>
                <option valeur="<?php echo $SCORE?>">Hapiness Rank</option>
                <option valeur="<?php echo $SCORE?>">Hapiness Score</option>
                <option valeur="<?php echo $SCORE?>">Economy</option>
                <option valeur="<?php echo $SCORE?>">Family</option>
                <option valeur="<?php echo $SCORE?>">Health</option>
                <option valeur="<?php echo $SCORE?>">Freedom</option>
                <option valeur="<?php echo $SCORE?>">Trust</option>
                <option valeur="<?php echo $SCORE?>">Generosity</option>
                <option valeur="<?php echo $SCORE?>">Social Support</option>
            </SELECT>
<!--La on va avoir 2 pbs : comment on fait si on veut séléctionner sur le monde + les rang seront les généraux meme si on demande un continent-->
            <SELECT name="Continent">
                <option valeur="">--Please choose a <strong>continent</strong>--</option>
                <option valeur="<?php echo $CONTINENT?>">Africa</option>
                <option valeur="<?php echo $CONTINENT?>">Asia</option>
                <option valeur="<?php echo $CONTINENT?>">Australia</option>
                <option valeur="<?php echo $CONTINENT?>">Europe</option>
                <option valeur="<?php echo $CONTINENT?>">North America</option>
                <option valeur="<?php echo $CONTINENT?>">South America</option>
                <option valeur="<?php echo $CONTINENT?>">Monde ????</option>
            </SELECT>
        
            <input type="submit" value="Appliquer filtres">
        </p>
        </form>

        <?php
        $annee = $_GET['annee'];
        //$SCORE = $_GET['FiltreScore'];
        $SCORE = $_GET['test'];
        $CONTINENT = $_GET['Continent'];
        ?>
<!--Mettre des filtres ici : année, score, continent...-->

        <table id="index_tab">
        <tr><td>Identifiant pays</td><td>Pays</td><!--En fonction d'un filtre, un score--><td>Valeur Score</td><td>Rang</td></tr>
                <?php $rep = $bdd->query('SELECT avoir.Id_Pays, pays.Nom_Pays, avoir.annee, avoir.valeur_score, avoir.rang, score.Nom_Score, continent.Nom_Continent  FROM avoir, pays, annee, score, continent 
                                            WHERE avoir.Id_Pays=pays.Id_Pays AND avoir.annee=annee.Annee 
                                            AND avoir.Id_Score=score.Id_Score AND continent.Id_Continent=pays.Id_Continent
                                            AND score.Nom_Score="'.$SCORE.'" AND avoir.annee="'.$annee.'"
                                            AND continent.Nom_Continent="'.$CONTINENT.'" 
                                            ORDER BY avoir.rang ASC');
                while ($ligne = $rep ->fetch()) {
                    echo "<tr><td>".$ligne['Id_Pays']."</td><td>"."<a href="."Scores/scores.php?id_Pays=".$ligne['Id_Pays'].">".$ligne['Nom_Pays']."</a>"."</td><td>".$ligne['valeur_score']."</td><td>".$ligne['rang']."</td></tr>";
                    }
                    $rep ->closeCursor(); 
                    ?>
        </table>


    </body>
</html>


<?php // Double tableau qui fonctionne
//$rep = $bdd->query('SELECT avoir.Id_Pays, pays.Nom_Pays, avoir.annee, avoir.valeur_score, avoir.rang, score.Nom_Score  FROM avoir, pays, annee,score 
      //                                  WHERE avoir.Id_Pays=pays.Id_Pays AND avoir.annee=annee.Annee AND avoir.Id_Score=score.Id_Score
      //                                  AND score.Nom_Score="'.$SCORE.'" AND avoir.annee="'.$annee.'" ORDER BY avoir.rang ASC');
      //          while ($ligne = $rep ->fetch()) {
      //              echo "<tr><td>".$ligne['Id_Pays']."</td><td>"."<a href="."Scores/scores.php?id_Pays=".$ligne['Id_Pays'].">".$ligne['Nom_Pays']."</a>"."</td><td>".$ligne['valeur_score']."</td><td>".$ligne['rang']."</td></tr>";
      //              }
      //              $rep ->closeCursor(); 
      //              ?>
