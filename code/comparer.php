<!DOCTYPE html>

<html>
    <?php
        require('../HapMap/bd.php');
        require_once ('jpgraph/src/jpgraph.php');
        require_once ('jpgraph/src/jpgraph_bar.php');
        $bdd = getBD();
    ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="Style/StyleHapmap.css?" type="text/css" media="screen" />
        <title>
            Comparer
        </title>
        <style>
            #ici{
    color: #148EFF;
    border-bottom: 2px solid #148EFF;
}
        </style>
    </head>

    <body>
        <header>
            <img src = "../HapMap/image/logo.png" alt = "Logo"/> 
            <nav>
            
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="#" >Continent</a></li>
                    <li><a id = "ici" href="comparer.php">Comparer</a></li>
                    <li><a href="scores.php">Score</a></li>
                    <li><a href="apropos.html" >A propos</a></li>
                    <!--Rajouter la fonction rechercher-->
                </ul>
            </nav>

        </header>
        
        <form action="comparer.php" method="post" autocomplete="off">
            <div class = "conteneur1">
                <p class = "colp1">
                <INPUT class="casepays" id ="pays1" type="text"name="pays1"value="<?php echo $pays1?>"placeholder="Sélectionner">
                </p>
                <p class = "colp1">
                <INPUT id = "annee" type="number"name="annee"value=""min="2015"max="2019"placeholder="année">
                </p>
                <p class = "colp1">
                <INPUT class="casepays" id ="pays2" type="text"name="pays2"value="<?php echo $pays2?>"placeholder="Sélectionner">
                </p>
            </div>
            <br/><br/><br/><br/>
            <p id = "bouton">
                <input id = "bouton_comparer" type="submit" value="Comparer">
            </p>
        </form>
        <?php
        $pays1 = $_POST['pays1'];
        $pays2 = $_POST['pays2'];
        $annee = $_POST['annee'];


        $req = $bdd->query('SELECT COUNT(*)
        FROM pays
        WHERE pays.Nom_Pays = "'.$pays1.'"');
        $pays1_existe = 1;
        while ($ligne = $req ->fetch()) {
            //nombre d'occurences du pays 1 dans la BD
            $pays1_existe = $ligne[0];
		    }
	    $req ->closeCursor();
        $req = $bdd->query('SELECT COUNT(*)
        FROM pays
        WHERE pays.Nom_Pays = "'.$pays2.'"');
        $pays2_existe = 1;
        while ($ligne = $req ->fetch()) {
            //nombre d'occurences du pays 2 dans la BD
            $pays2_existe = $ligne[0];
		    }
	    $req ->closeCursor();


        if($pays1=="" ||$pays2==""){
            echo "<div class ='indication'>";
            echo "<p>Veuillez saisir les noms des deux pays à comparer.</p>";
            echo "</div>";
        }elseif($pays1_existe == 0){
            echo "<div class ='indication'>";
            echo "<p>".$pays1."  n'existe pas dans la base de données</p>";
            echo "</div>";
            echo '<meta http-equiv="refresh" content="2; url= ../HapMap/comparer.php">';
        }elseif($pays2_existe == 0){
            echo "<div class ='indication'>";
            echo "<p>".$pays2."  n'existe pas dans la base de données</p>";
            echo "</div>";
            echo '<meta http-equiv="refresh" content="2; url=../HapMap/comparer.php">';
        }elseif($annee==""){
            echo "<div class ='indication'>";
            echo "<p>Veuillez sélectionner l'année pour laquelle vous souhaitez effecturer une comparaison.</p>";
            echo "</div>";
            echo '<meta http-equiv="refresh" content="4; url=../HapMap/comparer.php">';
        }else{
            //recuperation vecteur nom des indices pays 1 :
            $req = $bdd->query('SELECT score.Nom_Score
            FROM pays, avoir, score, annee
            WHERE pays.Nom_Pays ="'.$pays1.'"
            AND annee.Annee ="'.$annee.'" 
            AND annee.Annee = avoir.annee
            AND avoir.Id_Score=score.Id_Score
            AND avoir.Id_Pays = pays.Id_Pays');
            $libelle = array();
            while ($ligne = $req ->fetch()) {
                //stockage dans un tableau
	            array_push($libelle, $ligne['Nom_Score']."<br/>\n");
		    }
	        $req ->closeCursor();


            //recuperation vecteur scores des indices pays 1 :
            $req = $bdd->query('SELECT avoir.valeur_score
            FROM pays, avoir, score, annee
            WHERE pays.Nom_Pays ="'.$pays1.'"
            AND annee.Annee ="'.$annee.'" 
            AND annee.Annee = avoir.annee
            AND avoir.Id_Score=score.Id_Score
            AND avoir.Id_Pays = pays.Id_Pays');
            $val_pays1 = array();
            while ($ligne = $req ->fetch()) {
                //stockage dans un tableau
	            array_push($val_pays1, $ligne['valeur_score']."<br/>\n");
		    }
	        $req ->closeCursor();

            //recuperation vecteur scores des indices pays 2 :
            $req = $bdd->query('SELECT avoir.valeur_score
            FROM pays, avoir, score, annee
            WHERE pays.Nom_Pays ="'.$pays2.'"
            AND annee.Annee ="'.$annee.'" 
            AND annee.Annee = avoir.annee
            AND avoir.Id_Score=score.Id_Score
            AND avoir.Id_Pays = pays.Id_Pays');
            $val_pays2 = array();
            while ($ligne = $req ->fetch()) {
                //stockage dans un tableau
	            array_push($val_pays2, $ligne['valeur_score']."<br/>\n");
		    }
	        $req ->closeCursor();
            echo "<div class = 'conteneur2'>";
            echo "<p class = 'colp2' id = 'pays_gauche'>";
            echo $pays1;
            echo "</p><p class = 'colp2' id = 'pays_droit'>";
            echo $pays2;
            echo "</p>";
            echo "</div>";

            //Fonction pour afficher les elements d'un tableau :
            function afficher_tab($tab){
                $taille = count($tab);
                for($i = 0; $i < $taille; $i++){
                    echo $tab[$i];
                }
            }
            //fonction pour l'affichage de la page :
            //Prend en parametres 3 tableaux et retourne un tableau
            function affichage_gauche($libelle, $pays1, $pays2){
                $taille = count($libelle);
                $afficher = array();
                for($i = 0; $i < $taille; $i++){
                    if($i == 0){
                        if ($pays1[$i]>$pays2[$i]) {
                            array_push($afficher, "<br/>");
                        }else{
                            array_push($afficher, "< <br/>");
                       }
                    }else{
                        if ($pays1[$i]>$pays2[$i]) {
                            array_push($afficher, "< <br/>");
                     }else{
                            array_push($afficher, "<br/>");
                        }
                    }
               }
                return $afficher;
            }
            function affichage_droit($libelle, $pays1, $pays2){
                $taille = count($libelle);
                $afficher = array();
                for($i = 0; $i < $taille; $i++){
                    if($i == 0){
                        if ($pays1[$i]<$pays2[$i]) {
                            array_push($afficher, "<br/>");
                        }else{
                            array_push($afficher, "> <br/>");
                        }
                    }else{
                        if ($pays1[$i]<$pays2[$i]) {
                            array_push($afficher, "> <br/>");
                        }else{
                            array_push($afficher, "<br/>");
                        }
                    } 
                }
                return $afficher;
            }
            echo '<div id = "conteneur">';
            echo '<p class ="colp" id ="pays1">';
            afficher_tab($val_pays1);
            echo '</p>';
            echo '<p class ="colp">';
            afficher_tab(affichage_gauche($libelle, $val_pays1, $val_pays2));
            echo ' </p>';
            echo '<p class ="colp" id ="libelle">';
            afficher_tab($libelle);
            echo '</p>';
            echo '<p class ="colp">';
            afficher_tab(affichage_droit($libelle, $val_pays1, $val_pays2));
            echo '</p>';
            echo '<p class ="colp" id ="pays2">';
            afficher_tab($val_pays2);
            echo '</p>';
            echo '</div>';

           



        }
        
        ?>
    <script src = "app.js"></script>

    </body>
</html>