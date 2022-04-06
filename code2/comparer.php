<!DOCTYPE html>
<?php
/*Cette page sert à comparer deux  pays, elle est accessible via le menu du site, ou via le bouton comparer que l'on retrouve
sur les pages des pays dans l'onglet continent*/
session_start();
?>
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
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="JsLocalSearch.js"></script>
        
    </head>

    <body>
        <header>
            <a href="index.php"><img src = "image/logo.png" alt = "Logo"/></a>
            <nav>
            
                <ul>
                    <li><a href="index.php">Home page</a></li>
					<li><a href="continents1.php">Continent</a></li>
					<li><a class="ici" href="comparer.php">Compare</a></li>
					<li><a href="scores.php">Score</a></li>
					<li><a href="apropos.html">About us</a></li>
                    
                </ul>
            </nav>
            <input  class="gsearchsimple3 form-control input-lg"  name="recherche" type = "text" placeholder="Research">
            <!--Cette liste affiche la suggestion de pays lorsque l'on recherche-->
            <ul class="list-group3">
                
            </ul>

        </header>

        <?php
            $pays1 = "";
            $pays2 = "";
            $annee = "";
            if(isset($_SESSION['plein'])){
                echo '<meta http-equiv="refresh" content="0; url=deco.php">';
            }

            if(!isset($_SESSION['pays1'])){
                if(isset($_GET['pays1'])){
                    $_SESSION['pays1']=array();
                    $_SESSION['pays1'][0]=$_GET['pays1'];
                }elseif(isset($_GET['pays'])){
                    $_SESSION['pays1']=array();
                    $_SESSION['pays1'][0]=$_GET['pays'];
                }
            }else{
                if(!isset($_SESSION['pays2'])){
                    if(isset($_GET['pays1'])){
                        $_SESSION['pays2']=array();
                        $_SESSION['pays2'][0]=$_GET['pays1'];
                    }elseif(isset($_GET['pays'])){
                        $_SESSION['pays2']=array();
                        $_SESSION['pays2'][0]=$_GET['pays'];
                    }
                }
            }

            /*
            if(isset($_GET['pays'])){
                if(!isset($_SESSION['pays1'])){
                    $_SESSION['pays1']=array();
                    $_SESSION['pays1'][0]=$_GET['pays'];
                }
                elseif(!isset($_SESSION['pays2'])){
                    $_SESSION['pays2']=array();
                    $_SESSION['pays2'][0]=$_GET['pays'];
                }
            }*/
            
        
        ?>
        
            
        <!--
        <form action="comparer.php" method="post" autocomplete="off">
            <div class = "conteneur1">
                <p class = "colp1">
                <INPUT class="casepays" id="gsearchsimple" class="form-control input-lg"  type="text"name="pays1"placeholder="Please select"value=
                <?php /*if(isset($_SESSION['pays1'])){
                    echo '\''.$_SESSION['pays1'][0].'\''; 
                }
                elseif(isset($_GET['pays1']))
                    echo '\''.$_GET['pays1'].'\''; 
                else
                    echo "''";*/?> >
                </p>
                
                
                
    
                <p class = "colp1">
                <INPUT id = "annee" type="number"name="annee"value=""min="2015"max="2019"placeholder="year">
                </p>
                <p class = "colp1">
                <INPUT class="casepays" id="gsearchsimple2" class="form-control input-lg" type="text"name="pays2"placeholder="Please select"value=
                <?/*php if(isset($_SESSION['pays2'])){
                    echo '\''.$_SESSION['pays2'][0].'\''; 
                }
                elseif(isset($_GET['pays2']))
                    echo '\''.$_GET['pays2'].'\''; 
                else
                    echo "''";*/?> >
                </p>
                
            </div>
            <div id = "conteneurli">
            <ul class="list-group">
                
                </ul>
                <ul class="list-group2">
                
                </ul>
            </div>
            <br/>
                
            <br/><br/><br/><br/>
            <p id = "bouton">
                <input id = "bouton_comparer" type="submit" value="Compare">
            </p>
        </form>
            -->
       




        
        <?php
        if(isset($_POST['pays1']))
            $pays1 = $_POST['pays1'];

        if(isset($_POST['pays2']))
            $pays2 = $_POST['pays2'];

        if(isset($_POST['annee']))
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
        
        
        if($erreur == 0){ //on peut rentrer dans la suite du code

            echo'<form action="comparer.php" method="post" autocomplete="off">
            <div class = "conteneur1">
                <p class = "colp1">
                <INPUT class="casepays" id="gsearchsimple" class="form-control input-lg"  type="text"name="pays1"placeholder="Please select"value=';
                 if(isset($_SESSION['pays1'])){
                    echo '\''.$_SESSION['pays1'][0].'\''; 
                }
                elseif(isset($_GET['pays1']))
                    echo '\''.$_GET['pays1'].'\''; 
                else
                    echo "''"; 
                echo'</p>';
                
                
                
                if(isset($_SESSION['pays1']) && isset($_SESSION['pays2'])){
                    echo '<p class = "colp1">
                <INPUT  id = "annee" type="number"name="annee"value=""min="2015"max="2019"placeholder="year">
                </p>';
                }else{
                    echo '<p class = "colp1">
                <INPUT class="invisible" id = "annee" type="number"name="annee"value=""min="2015"max="2019"placeholder="year">
                </p>';
                }
                
                echo  '<p class = "colp1">
                <INPUT class="casepays" id="gsearchsimple2" class="form-control input-lg" type="text"name="pays2"placeholder="Please select"value=';
                if(isset($_SESSION['pays2'])){
                    echo '\''.$_SESSION['pays2'][0].'\''; 
                }
                elseif(isset($_GET['pays2']))
                    echo '\''.$_GET['pays2'].'\''; 
                else
                    echo "''";
                    //les ul servent à afficher les pays de l'autocomplétion
                echo '</p>
                
            </div>
            <div id = "conteneurli">
            <ul class="list-group">
                
                </ul>
                <ul class="list-group2">
                
                </ul>
            </div>
            <br/>
                
            <br/><br/><br/><br/>
            <p id = "bouton">
                <input id = "bouton_comparer" type="submit" value="Compare">
            </p>
        </form>';


            //Cette partie du code gère les erreurs de champs vides ou incorrects
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
                if(isset($_GET['continent'])){
                    echo "<p>Please select the name of the other country and the year</p>";
                }else{
                    echo "<p>".$_GET['aff']."  Doesn't exist in the database</p>";
                }
                echo "</div>";
            }else{
                echo "<div class ='indication'>";
                echo '<p id="t1">Please select the names of the two countries that you would like to compare.</p>';
                echo "</div>";
            }
        }elseif($erreur == 1){
            echo '<meta http-equiv="refresh" content="0; url=comparer.php?pays2='.$pays2.'&aff='.$pays1.'">';
        }elseif($erreur == 2){
            echo '<meta http-equiv="refresh" content="0; url=comparer.php?pays1='.$pays1.'&aff='.$pays2.'">';
        }elseif($erreur == 3){
            echo '<meta http-equiv="refresh" content="0; url=comparer.php?pays1='.$pays1.'&pays2='.$pays2.'">';
        }else{//ici tout est correct, on peut comparer les pays sélectionnés
            //création d'une variable de session qui servira à vider pays1 et pays2 au lancement de la page
            $_SESSION['plein']=array();
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

            //Ce bloc vérifie  si les données existent pour tel pays à l'année choisie
            if($val_pays1==array()){
                echo "<p class='indispo'>Data not available for ".$pays1." in ".$annee."</p>";
                echo '<meta http-equiv="refresh" content="4; url=comparer.php">';
            }elseif($val_pays2==array()){
                echo "<p class='indispo'>Data not available for ".$pays2." in ".$annee."</p>";
                echo '<meta http-equiv="refresh" content="4; url=comparer.php">';
            }else{
                $req ->closeCursor();

            //affichage du nom  des deux pays sélectionnés
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
            
            //Ces deux fonction affichent les flèches du bon côté pour chaque indicateur le plus élevé
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
            

             //affichage des éléments de comparaison (scores des deux pays, lebellés et flèches)

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

           //récupération des identifiants des deux pays (pour le graphe)
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

            //affichage du  graphe
        
        echo '<div id =  "graphe_comparer">';
        echo '<img id = "img_graphe_comp" src = "graphe_comparer.php?id_pays1='.$id_pays1.'&id_pays2='.$id_pays2.'&annee='.$annee.'">';
        echo '</div>';

        //Lien pour sélectionner d'autres pays

        echo '<p class = "change"><a href = "deco.php">Select  other countries</a></p><br/><br/><br/>';
            }
	        


        }
       
        ?>
    

    </body>
</html>
<script>
    //Script JS pour appeler l'autocomplétion 

//autocomplétion de la fonction de recherche :
$(document).ready(function(){
 $('.gsearchsimple3').keyup(function(){
  var query3 = $('.gsearchsimple3').val();
  $('#detail').html('');
  $('.list-group3').css('display', 'block');
  if(query3.length == 1)
  {
   $.ajax({
    url:"fetch2.php",
    method:"POST",
    data:{query:query3},
    success:function(data)
    {
     $('.list-group3').html(data);
    }
   })
  }
  //on lance l'appel à chque longueur de la chaine, donc on vérifie à chaque touche
  if(query3.length == 2)
  {
   $.ajax({
    url:"fetch2.php",
    method:"POST",
    data:{query:query3},
    success:function(data)
    {
     $('.list-group3').html(data);
    }
   })
  }
  if(query3.length == 3)
  {
   $.ajax({
    url:"fetch2.php",
    method:"POST",
    data:{query:query3},
    success:function(data)
    {
     $('.list-group3').html(data);
    }
   })
  }
  if(query3.length == 4)
  {
   $.ajax({
    url:"fetch2.php",
    method:"POST",
    data:{query:query3},
    success:function(data)
    {
     $('.list-group3').html(data);
    }
   })
  }
  if(query3.length == 5)
  {
   $.ajax({
    url:"fetch2.php",
    method:"POST",
    data:{query:query3},
    success:function(data)
    {
     $('.list-group3').html(data);
    }
   })
  }
  if(query3.length == 6)
  {
   $.ajax({
    url:"fetch2.php",
    method:"POST",
    data:{query:query3},
    success:function(data)
    {
     $('.list-group3').html(data);
    }
   })
  }
  if(query3.length == 7)
  {
   $.ajax({
    url:"fetch2.php",
    method:"POST",
    data:{query:query3},
    success:function(data)
    {
     $('.list-group3').html(data);
    }
   })
  }
  if(query3.length == 0)
  {
   $('.list-group3').css('display', 'none');
  }
 });
});
</script>
<script>
//autocomplétion de l'input du pays 1 :
$(document).ready(function(){
 $('#gsearchsimple').keyup(function(){
  var query = $('#gsearchsimple').val();
  $('#detail').html('');
  $('.list-group').css('display', 'block');
  if(query.length == 1)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query},
    success:function(data)
    {
     $('.list-group').html(data);
    }
   })
  }
  if(query.length == 2)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query},
    success:function(data)
    {
     $('.list-group').html(data);
    }
   })
  }
  if(query.length == 3)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query},
    success:function(data)
    {
     $('.list-group').html(data);
    }
   })
  }
  if(query.length == 4)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query},
    success:function(data)
    {
     $('.list-group').html(data);
    }
   })
  }
  if(query.length == 5)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query},
    success:function(data)
    {
     $('.list-group').html(data);
    }
   })
  }
  if(query.length == 6)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query},
    success:function(data)
    {
     $('.list-group').html(data);
    }
   })
  }
  if(query.length == 7)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query},
    success:function(data)
    {
     $('.list-group').html(data);
    }
   })
  }
  if(query.length == 0)
  {
   $('.list-group').css('display', 'none');
  }
 });

  //autocomplétion de l'input du pays 2 :
 $('#gsearchsimple2').keyup(function(){
  var query2 = $('#gsearchsimple2').val();
  $('#detail').html('');
  $('.list-group2').css('display', 'block');
  if(query2.length == 1)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query2},
    success:function(data)
    {
     $('.list-group2').html(data);
    }
   })
  }
  if(query2.length == 1)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query2},
    success:function(data)
    {
     $('.list-group2').html(data);
    }
   })
  }
  if(query2.length == 2)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query2},
    success:function(data)
    {
     $('.list-group2').html(data);
    }
   })
  }
  if(query2.length == 3)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query2},
    success:function(data)
    {
     $('.list-group2').html(data);
    }
   })
  }
  if(query2.length == 4)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query2},
    success:function(data)
    {
     $('.list-group2').html(data);
    }
   })
  }
  if(query2.length == 5)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query2},
    success:function(data)
    {
     $('.list-group2').html(data);
    }
   })
  }
  if(query2.length == 6)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query2},
    success:function(data)
    {
     $('.list-group2').html(data);
    }
   })
  }
  if(query2.length == 7)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query2},
    success:function(data)
    {
     $('.list-group2').html(data);
    }
   })
  }
  if(query2.length == 0)
  {
   $('.list-group2').css('display', 'none');
  }
 });

 $('#localSearchSimple').jsLocalSearch({
  action:"Show",
  html_search:true,
  mark_text:"marktext"
 });

 $(document).on('click', '.gsearch', function(){
  var email = $(this).text();
  $('#gsearchsimple').val(email);
  $('.list-group').css('display', 'none');
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{email:email},
   success:function(data)
   {
    $('#detail').html(data);
   }
  })
 });
});
</script>