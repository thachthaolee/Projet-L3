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
        <!-- menu bandeau fin -->
        <img id= "Score"src = "image/ScoreLeaders.png" alt = "Photo ScoreLeaders"/> 
        <h2 id="ScoreLeaders">Score Leaders</h2>
        <!--<h2>Famille</h2> Pour mettre au point css-->

        <!--formulaire pour filtres-->
    
        <?php
        $SCORE = "";
        $CONTINENT = "";
        ?>

        <form action="filtres.php" method="get" autocomplete="off">
        <p id= "form_index">
            <INPUT class="formulaire_filtres" type="number"name="annee"value=""min="2015"max="2019"placeholder="Année">
        
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
                <option valeur="">--Please choose a <strong>continent</strong>--</option>
                <option valeur="<?php echo $CONTINENT?>">Africa</option>
                <option valeur="<?php echo $CONTINENT?>">Asia</option>
                <option valeur="<?php echo $CONTINENT?>">Australia</option>
                <option valeur="<?php echo $CONTINENT?>">Europe</option>
                <option valeur="<?php echo $CONTINENT?>">North America</option>
                <option valeur="<?php echo $CONTINENT?>">South America</option>
            </SELECT>
        
            <input class="formulaire_filtres" type="submit" value="Appliquer filtres">
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
if($annee==""){
    echo "<div>";
    echo "<p>Veuillez sélectionner une année à observer</p>";
    echo "</div>";
}
elseif($SCORE=="--Please choose a Score--"){
    echo "<div>";
    echo "<p>Veuillez choisir un score à observer</p>";
    echo "</div>";
}
elseif($CONTINENT=="--Choose a continent--"){
    echo "<p>Indice sélctionné : ".$SCORE."</p>";
    echo "<p>Année sélctionnée : ".$annee."</p>";
    echo "<p>Continent sélctionné : Aucun</p>";
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
    echo "<p>Indice sélctionné : ".$SCORE."</p>";
    echo "<p>Année sélctionnée : ".$annee."</p>";
    echo "<p>Continent sélctionné : ".$CONTINENT."</p>";
    echo "<p>Notez que les rangs sont les rangs pour le monde entier t'as vu, leur classement est défini par leur ordre</p>";
    echo '<table id="index_tab">';
    echo "<tr><td>Identifiant pays</td><td>Pays</td><!--En fonction d'un filtre, un score--><td>Valeur Score</td><td>Rang</td></tr>";
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




















