<!DOCTYPE html>

<html>
    <?php
        require('../HapMap/bd.php');
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
        
        <form action="comparer.php" method="post" autocomplete="off">
            <div id = "conteneur1">
                <p class = "colp1">
                <INPUT class="casepays" id ="pays1" type="text"name="pays1"value=""placeholder="Sélectionner">
                </p>
                <p class = "colp1">
                <INPUT id = "annee" type="number"name="annee"value=""min="2015"max="2019"placeholder="année">
                </p>
                <p class = "colp1">
                <INPUT class="casepays" id ="pays2" type="text"name="pays2"value=""placeholder="Sélectionner">
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
	        array_push($libelle, $ligne['Nom_Score']);
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




        //Fonction pour afficher les elements d'un tableau :
        function afficher_tab($tab){
            $taille = count($tab);
            for($i = 0; $i < $taille; $i++){
                echo $tab[$i];
            }
        }
        //fonction pour l'affichage de la page :
        //Prend en parametres 3 tableaux et retourne un tableau
        //A faire : inerver le sens pour hapiness rank
        function affichage_gauche($libelle, $pays1, $pays2){
            $taille = count($libelle);
            $afficher = array();
            for($i = 0; $i < $taille; $i++){
                if ($pays1[$i]>$pays2[$i]) {
                    array_push($afficher, "< <br/>");
                }else{
                    array_push($afficher, "<br/>");
                }
            }
            return $afficher;
        }
        function affichage_droit($libelle, $pays1, $pays2){
            $taille = count($libelle);
            $afficher = array();
            for($i = 0; $i < $taille; $i++){
                if ($pays1[$i]<$pays2[$i]) {
                    array_push($afficher, "> <br/>");
                }else{
                    array_push($afficher, "<br/>");
                }
            }
            return $afficher;
        }
        ?>
        <div id = "conteneur">
        <p class ="colp" id ="pays1">
            <?php afficher_tab($val_pays1)?>;
        </p>
        <p class ="colp">
            <?php afficher_tab(affichage_gauche($libelle, $val_pays1, $val_pays2))?>;
        </p>
        <p class ="colp" id ="libelle">
            <?php afficher_tab($libelle)?>;
        </p>
        <p class ="colp">
            <?php afficher_tab(affichage_droit($libelle, $val_pays1, $val_pays2))?>;
        </p>
        <p class ="colp" id ="pays2">
            <?php afficher_tab($val_pays2)?>;
        </p>
        </div>

    </body>
</html>