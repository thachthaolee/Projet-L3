<!DOCTYPE html>

<html>

<head>
    <?php include('bd.php'); 
    $bdd = getBD();?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="Style/StyleHapmap.css?" type="text/css" media="screen" />
    <title> Scores </title>
</head>

<body>

<header>
            <a href ="index.php"><img src = "image/logo.png" alt = "Logo"/></a> 
            <nav>
            
                <ul>
                    <li><a href="index.php">Home page</a></li>
					<li><a href="continents1.php">Continent</a></li>
					<li><a href="comparer.php">Compare</a></li>
					<li><a class="ici" href="scores.php">Score</a></li>
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

        <?php
        $annee = "";
        $SCORE = "";
        $CONTINENT = "";
        ?>

        <form action="scores.php" method="get" autocomplete="off">
        <p id = "form_index">
            <INPUT class="formulaire_filtres" type="number"name="annee"value=""min="2015"max="2019"placeholder="Year">
        
        
            <SELECT class="formulaire_filtres" name="score">
                <option valeur="">--Please choose a Score--</option>
                <option valeur="<?php echo $SCORE?>">Economy</option>
                <option valeur="<?php echo $SCORE?>">Family</option>
                <option valeur="<?php echo $SCORE?>">Health</option>
                <option valeur="<?php echo $SCORE?>">Freedom</option>
                <option valeur="<?php echo $SCORE?>">Trust</option>
                <option valeur="<?php echo $SCORE?>">Generosity</option>
            </SELECT>

            <SELECT class="formulaire_filtres" name="continent">
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
        if(isset($_GET['annee']))
            $annee = $_GET['annee'];
        if(isset($_GET['score']))
            $SCORE = $_GET['score'];
        if(isset($_GET['continent']))
            $CONTINENT = $_GET['continent'];
        

//echo "<meta http-equiv='Refresh' content='0; url=scores.php?annee=".$annee."&score=".$SCORE."&Continent=".$CONTINENT."'/>";
if($annee==""){
    echo "<div>";
    echo "<p class='àremplir'>Please select a year to observe</p>";
    echo "</div>";
    //echo "<meta http-equiv='Refresh' content='0; url=scores.php?score=".$SCORE."&Continent=".$CONTINENT."'/>";
}
elseif($SCORE=="--Please choose a Score--" && $CONTINENT=="--Choose a continent--"){
        echo "<div>";
    echo "<p class='selection'>Year selected : ".$annee."</p>";    
    echo "<p class='selection'>Index selected : Hapiness Score</p>";
    echo "<p class='selection'>Continent selected : World</p>";
        echo "</div>";
    echo "<p id='indic'>To be noted that the ranks that you are watching, are the ranks for the whole world, their ranking is being defined by their order.</p>";
    echo '<table id="index_tab">';
    echo "<tr id='champs'><td>Identifiant pays</td><td>Pays</td><td>Valeur Score</td><td>Rang</td></tr>";
             $rep = $bdd->query('SELECT avoir.Id_Pays, pays.Nom_Pays, avoir.annee, avoir.valeur_score, avoir.rang, score.Nom_Score, continent.Nom_Continent
                                 FROM avoir, pays, annee, score, continent
                                 WHERE avoir.Id_Pays=pays.Id_Pays 
                                 AND avoir.annee=annee.Annee
                                 AND avoir.Id_Score=score.Id_Score 
                                 AND continent.Id_Continent=pays.Id_Continent
                                 AND score.Nom_Score="Hapiness Score"
                                 AND avoir.annee="'.$annee.'" 
                                 ORDER BY avoir.rang ASC');
            while ($ligne = $rep ->fetch()) {
                echo "<tr><td>".$ligne['Id_Pays']."</td><td>"."<a id='hover' href="."continents3.php?id_pays=".$ligne['Id_Pays']."&annee=".$annee.">".
                $ligne['Nom_Pays']."</a>"."</td><td>".$ligne['valeur_score']."</td><td>".$ligne['rang']."</td></tr>";
            }
            $rep ->closeCursor();
                                                        
            echo "</table>";     
}
elseif($SCORE=="--Please choose a Score--"){
        echo "<div>";
    echo "<p class='selection'>Year selected : ".$annee."</p>";    
    echo "<p class='selection'>Index selected : Hapiness Score</p>";
    echo "<p class='selection'>Continent selected : ".$CONTINENT."</p>";
        echo "</div>";
    echo "<p id='indic'>To be noted that the ranks that you are watching, are the ranks for the whole world, their ranking is being defined by their order.</p>";
    echo '<table id="index_tab">';
    echo "<tr id='champs'><td>Identifiant pays</td><td>Pays</td><td>Valeur Score</td><td>Rang</td></tr>";
             $rep = $bdd->query('SELECT avoir.Id_Pays, pays.Nom_Pays, avoir.annee, avoir.valeur_score, avoir.rang, score.Nom_Score, continent.Nom_Continent
                                 FROM avoir, pays, annee, score, continent
                                 WHERE avoir.Id_Pays=pays.Id_Pays 
                                 AND avoir.annee=annee.Annee
                                 AND avoir.Id_Score=score.Id_Score 
                                 AND continent.Id_Continent=pays.Id_Continent
                                 AND score.Nom_Score="Hapiness Score"
                                 AND avoir.annee="'.$annee.'"
                                 AND continent.Nom_Continent="'.$CONTINENT.'" 
                                 ORDER BY avoir.rang ASC');
            $i=1;
            while ($ligne = $rep ->fetch()) {
                echo "<tr><td>".$ligne['Id_Pays']."</td><td>"."<a id='hover' href="."continents3.php?id_pays=".$ligne['Id_Pays']."&annee=".$annee.">".
                $ligne['Nom_Pays']."</a>"."</td><td>".$ligne['valeur_score']."</td><td>".$i."</td></tr>";
                $i++;
            }
            $rep ->closeCursor();
                                    
    echo "</table>";

    /*echo "<div>";
    echo "<p class='àremplir'>Please select a score to observe</p>";    
    echo "</div>";
    //echo "<meta http-equiv='Refresh' content='0; url=scores.php?annee=".$annee."&Continent=".$CONTINENT."'/>";*/
}
 elseif($CONTINENT=="--Choose a continent--"){
        echo "<div>";
    echo "<p class='selection'>Year selected : ".$annee."</p>";
    echo "<p class='selection'>Index selected : ".$SCORE."</p>";
    echo "<p class='selection'>Continent selected : World</p>";
        echo "</div>";
    echo "<p id='indic'>To be noted that the ranks that you are watching, are the ranks for the whole world, their ranking is being defined by their order.</p>";
    echo '<table id="index_tab">';
    echo "<tr id='champs'><td>Identifiant pays</td><td>Pays</td><td>Valeur Score</td><td>Rang</td></tr>";
             $rep = $bdd->query('SELECT avoir.Id_Pays, pays.Nom_Pays, avoir.annee, avoir.valeur_score, avoir.rang, score.Nom_Score, continent.Nom_Continent  FROM avoir, pays, annee, score, continent 
                                        WHERE avoir.Id_Pays=pays.Id_Pays AND avoir.annee=annee.Annee 
                                        AND avoir.Id_Score=score.Id_Score AND continent.Id_Continent=pays.Id_Continent
                                        AND score.Nom_Score="'.$SCORE.'" AND avoir.annee="'.$annee.'"
                                        ORDER BY avoir.rang ASC');
            while ($ligne = $rep ->fetch()) {
                echo "<tr><td>".$ligne['Id_Pays']."</td><td>"."<a id='hover' href="."continents3.php?id_pays=".$ligne['Id_Pays']."&annee=".$annee.">".
                $ligne['Nom_Pays']."</a>"."</td><td>".$ligne['valeur_score']."</td><td>".$ligne['rang']."</td></tr>";
                }
                $rep ->closeCursor();
                
    echo "</table>";
 }
 else{
        echo "<div>"; 
    echo "<p class='selection'>Year selected : ".$annee."</p>";    
    echo "<p class='selection'>Index selected : ".$SCORE."</p>";
    echo "<p class='selection'>Continent selected : ".$CONTINENT."</p>";
        echo "</div>";
    echo "<p id='indic'>To be noted that the ranks that you are watching, are the ranks for the whole world, their ranking is being defined by their order.</p>";
    echo '<table id="index_tab">';
    echo "<tr id='champs'><td>Identifiant pays</td><td>Pays</td><!--En fonction d'un filtre, un score--><td>Valeur Score</td><td>Rang</td></tr>";
             $rep = $bdd->query('SELECT avoir.Id_Pays, pays.Nom_Pays, avoir.annee, avoir.valeur_score, avoir.rang, score.Nom_Score, continent.Nom_Continent  FROM avoir, pays, annee, score, continent 
                                        WHERE avoir.Id_Pays=pays.Id_Pays AND avoir.annee=annee.Annee 
                                        AND avoir.Id_Score=score.Id_Score AND continent.Id_Continent=pays.Id_Continent
                                        AND score.Nom_Score="'.$SCORE.'" AND avoir.annee="'.$annee.'"
                                        AND continent.Nom_Continent="'.$CONTINENT.'" 
                                        ORDER BY avoir.rang ASC');
            $i=1;
            while ($ligne = $rep ->fetch()) {
                echo "<tr><td>".$ligne['Id_Pays']."</td><td>"."<a id='hover' href="."continents3.php?id_pays=".$ligne['Id_Pays']."&annee=".$annee.">".
                $ligne['Nom_Pays']."</a>"."</td><td>".$ligne['valeur_score']."</td><td>".$i."</td></tr>";
                $i++;
                }
                $rep ->closeCursor(); 
                
    echo "</table>";
 }
?>


</body>

</html>