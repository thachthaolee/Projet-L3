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
            <style>
            #ici{
    color: #148EFF;
    border-bottom: 2px solid #148EFF;
}
        </style>

    </head>
    <body>

        <!-- menu bandeau début -->
        <header>
            <img src = "image/logo.png" alt = "Logo"/> 
            <nav>
            
                <ul>
                    <li><a id="ici" href="index.php">Home page</a></li>
					<li><a href="continents1.php">Continent</a></li>
					<li><a href="comparer.php">Compare</a></li>
					<li><a href="scores.php">Score</a></li>
					<li><a href="apropos.html">About us</a></li>
                    <!--Rajouter la fonction rechercher-->
                </ul>
            </nav>

            

        </header>
        <!-- menu bandeau fin -->
        <img id= "Score"src = "image/ScoreLeaders.png" alt = "Photo ScoreLeaders"/> 
        <h2 id="ScoreLeaders">Score Leaders</h2>
        <!--<h2>Famille</h2> Pour mettre au point css-->

        <!--formulaire pour filtres-->
    

        <form action="index.php" method="get" autocomplete="off">
        <p id = "form_index">
            <INPUT class="formulaire_filtres" type="number"name="annee"value=""min="2015"max="2019"placeholder="Year">
        
            <!--<INPUT type="text" name="FiltreScore" value="<?php echo $SCORE?>"placeholder="Sélectionner">-->
<!--Je prefererais passer par l'id score que le nom du score-->
            <SELECT class="formulaire_filtres" name="score">
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
            <SELECT class="formulaire_filtres" name="Continent">
                <option valeur="">--Choose a continent--</option>
                <option valeur="<?php echo $CONTINENT?>">Africa</option>
                <option valeur="<?php echo $CONTINENT?>">Asia</option>
                <option valeur="<?php echo $CONTINENT?>">Australia</option>
                <option valeur="<?php echo $CONTINENT?>">Europe</option>
                <option valeur="<?php echo $CONTINENT?>">North America</option>
                <option valeur="<?php echo $CONTINENT?>">South America</option>
            </SELECT>
        
            <input class="formulaire_filtres" type="submit" value="Apply filters">
        </p>
        </form>

        <?php
        $annee = $_GET['annee'];
        //$SCORE = $_GET['FiltreScore'];
        $SCORE = $_GET['score'];
        $CONTINENT = $_GET['Continent'];
        ?>
<!--Mettre des filtres ici : année, score, continent...-->

<?php
//echo "<meta http-equiv='Refresh' content='0; url=index.php?annee=".$annee."&score=".$SCORE."&Continent=".$CONTINENT."'/>";
if($annee==""){
    echo "<div>";
    echo "<p class='àremplir'>Please select a year to observe</p>";
    echo "</div>";
    //echo "<meta http-equiv='Refresh' content='0; url=index.php?score=".$SCORE."&Continent=".$CONTINENT."'/>";
}
elseif($SCORE=="--Please choose a Score--"){
    echo "<div>";
    echo "<p class='àremplir'>Please select a year to observe</p>";    
    echo "</div>";
    //echo "<meta http-equiv='Refresh' content='0; url=index.php?annee=".$annee."&Continent=".$CONTINENT."'/>";
}
 elseif($CONTINENT=="--Please choose a continent--"){
    echo "<p>Index selected : ".$SCORE."</p>";
    echo "<p>Year selected : ".$annee."</p>";
    echo "<p>Continent selected : Aucun</p>";
    echo '<table id="index_tab">';
    echo "<tr id='champs'><td>Identifiant pays</td><td>Pays</td><!--En fonction d'un filtre, un score--><td>Valeur Score</td><td>Rang</td></tr>";
             $rep = $bdd->query('SELECT avoir.Id_Pays, pays.Nom_Pays, avoir.annee, avoir.valeur_score, avoir.rang, score.Nom_Score, continent.Nom_Continent  FROM avoir, pays, annee, score, continent 
                                        WHERE avoir.Id_Pays=pays.Id_Pays AND avoir.annee=annee.Annee 
                                        AND avoir.Id_Score=score.Id_Score AND continent.Id_Continent=pays.Id_Continent
                                        AND score.Nom_Score="'.$SCORE.'" AND avoir.annee="'.$annee.'"
                                        ORDER BY avoir.rang ASC');
            while ($ligne = $rep ->fetch()) {
                echo "<tr><td>".$ligne['Id_Pays']."</td><td>"."<a href="."Scores/scores.php?id_Pays=".$ligne['Id_Pays'].">".$ligne['Nom_Pays']."</a>"."</td><td>".$ligne['valeur_score']."</td><td>".$ligne['rang']."</td></tr>";
                }
                $rep ->closeCursor(); 
                
    echo "</table>";

 }
 else{
    echo "<p>Index selected : ".$SCORE."</p>";
    echo "<p>Year selected : ".$annee."</p>";
    echo "<p>Continent selected : ".$CONTINENT."</p>";
    echo "<p>To be noted that the ranks that you are watching, are the ranks for the whole world, their ranking is being defined by their order.</p>";
    echo '<table id="index_tab">';
    echo "<tr id='champs'><td>Identifiant pays</td><td>Pays</td><!--En fonction d'un filtre, un score--><td>Valeur Score</td><td>Rang</td></tr>";
             $rep = $bdd->query('SELECT avoir.Id_Pays, pays.Nom_Pays, avoir.annee, avoir.valeur_score, avoir.rang, score.Nom_Score, continent.Nom_Continent  FROM avoir, pays, annee, score, continent 
                                        WHERE avoir.Id_Pays=pays.Id_Pays AND avoir.annee=annee.Annee 
                                        AND avoir.Id_Score=score.Id_Score AND continent.Id_Continent=pays.Id_Continent
                                        AND score.Nom_Score="'.$SCORE.'" AND avoir.annee="'.$annee.'"
                                        AND continent.Nom_Continent="'.$CONTINENT.'" 
                                        ORDER BY avoir.rang ASC');
            while ($ligne = $rep ->fetch()) {
                echo "<tr><td>".$ligne['Id_Pays']."</td><td>"."<a href="."Scores/scores.php?id_Pays=".$ligne['Id_Pays'].">".$ligne['Nom_Pays']."</a>"."</td><td>".$ligne['valeur_score']."</td><td>".$ligne['rang']."</td></tr>";
                }
                $rep ->closeCursor(); 
                
    echo "</table>";
 }
?>



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
