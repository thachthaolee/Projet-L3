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
                    <li><a href="index.php">Home page</a></li>
					<li><a href="continents1.php">Continent</a></li>
					<li><a id="ici" href="comparer.php">Compare</a></li>
					<li><a href="scores.php">Score</a></li>
					<li><a href="apropos.html">About us</a></li>
                    <!--Rajouter la fonction rechercher-->
                </ul>
            </nav>

        </header>
        
        <form action="comparer.php" method="post" autocomplete="off">
            <div class = "conteneur1">
                <p class = "colp1">
                <INPUT class="casepays" id ="pays1" type="text"name="pays1"value=<?php echo '\''.$_GET['pays1'].'\''; ?>placeholder="Please select">
                </p>
                <p class = "colp1">
                <INPUT id = "annee" type="number"name="annee"value=""min="2015"max="2019"placeholder="year">
                </p>
                <p class = "colp1">
                <INPUT class="casepays" id ="pays2" type="text"name="pays2"value=<?php echo '\''.$_GET['pays2'].'\''; ?>placeholder="Please select">
                </p>
            </div>
            <br/><br/><br/><br/>
            <p id = "bouton">
                <input id = "bouton_comparer" type="submit" value="Compare">
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
        
        if(isset($_GET['erreur'])){
            $erreur = $_GET['erreur'];
        }else{
            $erreur = 0;
        }
        
        // erreur 0 : champ vide -> Veuillez saisir les noms des deux pays à comparer.
        if($pays1=="" ||$pays2==""){
            $erreur=0;
        }elseif($pays1_existe == 0){ //erreur 1 : le pays1 n'existe pas
            $erreur = 1;
        }elseif($pays2_existe == 0){ //erreur 2 : le pays2 n'existe pas
            $erreur = 2;
        }elseif($annee==""){//erreur 3 : les pays ont ete saisis et existent mais l'annee n'est pas saisie
            $erreur  = 3;
        }else{
            $erreur = 999;
        }
        
        
        if($erreur == 0){
            if(isset($_GET['pays1']) && isset($_GET['pays2'])){
                echo "<div class ='indication'>";
                echo "<p>Please select the year for which you would like to make a comparison.</p>";
                echo "</div>";
            }elseif(!isset($_GET['pays1']) && isset($_GET['pays2'])){
                echo "<div class ='indication'>";
                echo "<p>".$_GET['aff']."  Doesn't exist in the database</p>";
                echo "</div>";
            }elseif(isset($_GET['pays1']) && !isset($_GET['pays2'])){
                echo "<div class ='indication'>";
                echo "<p>".$_GET['aff']."  Doesn't exist in the database</p>";
                echo "</div>";
            }else{
                echo "<div class ='indication'>";
                echo "<p>Please select the names of the two countries that you would like to compare.</p>";
                echo "</div>";
            }
        }elseif($erreur == 1){
            echo '<meta http-equiv="refresh" content="0; url=comparer.php?pays2='.$pays2.'&aff='.$pays1.'">';
        }elseif($erreur == 2){
            echo '<meta http-equiv="refresh" content="0; url=comparer.php?pays1='.$pays1.'&aff='.$pays2.'">';
        }elseif($erreur == 3){
            echo '<meta http-equiv="refresh" content="0; url=comparer.php?pays1='.$pays1.'&pays2='.$pays2.'">';
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
                        if (intval($pays1[$i])>intval($pays2[$i])) {
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
                        if (intval($pays1[$i])<intval($pays2[$i])) {
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

           
            $req = $bdd->query('SELECT pays.id_pays
            FROM pays
            WHERE pays.Nom_Pays ="'.$pays1.'"');
            $id_pays1;
            while ($ligne = $req ->fetch()) {
	            $id_pays1 = $ligne[0];
		    }
	        $req ->closeCursor();
            $req = $bdd->query('SELECT pays.id_pays
            FROM pays
            WHERE pays.Nom_Pays ="'.$pays2.'"');
            $id_pays2;
            while ($ligne = $req ->fetch()) {
	            $id_pays2 = $ligne[0];
		    }
	        $req ->closeCursor();
        
        echo '<div id =  "graphe_comparer">';
        echo '<img id = "img_graphe_comp" src = "graphe_comparer.php?id_pays1='.$id_pays1.'&id_pays2='.$id_pays2.'&annee='.$annee.'">';
        echo '</div>';


        }
       
        ?>
    

    </body>
</html>