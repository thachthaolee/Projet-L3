<!DOCTYPE html>

<html>
    <?php
        require('../HapMap/bd.php');
        $bdd = getBD();
    ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="comparer.css" type="text/css" media="screen" />
        <title>
            Comparer
        </title>
    </head>

    <body>
        
        <form action="comparer.php" method="post" autocomplete="off">
            <p>
                <INPUT type="number"name="annee"value=""min="2015"max="2019"placeholder="année">
            </p>
            <p>
                <INPUT class="casepays" type="text"name="pays1"value=""placeholder="Sélectionner">
            </p>
            <p>
                <INPUT class="casepays" type="text"name="pays2"value=""placeholder="Sélectionner">
            </p>
            <p>
                <input type="submit" value="Envoyer">
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
        function affichage_page($libelle, $pays1, $pays2){
            $taille = count($libelle);
            $afficher = array();
            for($i = 0; $i < $taille; $i++){
                if ($pays1[$i]>$pays2[$i]) {
                    array_push($afficher, "< ".$libelle[$i]."  <br/>");
                }elseif ($pays1[$i]<$pays2[$i]) {
                    array_push($afficher, "  ".$libelle[$i]." ><br/>");
                }else{
                    array_push($afficher, "  ".$libelle[$i]."  <br/>");
                }
            }
            return $afficher;
        }
        ?>
        <p id ="pays1">
            <?php afficher_tab($val_pays1)?>;
        </p>
        <p id ="libelle">
            <?php afficher_tab(affichage_page($libelle, $val_pays1, $val_pays2))?>;
        </p>
        <p id ="pays2">
            <?php afficher_tab($val_pays2)?>;
        </p>

    </body>
</html>