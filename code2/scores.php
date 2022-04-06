<!DOCTYPE html>

<html>
<!-- Page qui permet, en fonction de filtres, la visualisation d'un classement des différents pays disponibles -->
<head>
    <?php include('bd.php'); 
    $bdd = getBD();?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="Style/StyleHapmap.css?" type="text/css" media="screen" />
    <title> Hapmap </title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="JsLocalSearch.js"></script>
</head>

<body>

<!-- Bandeau haut de page -->
<header>
            <a href ="index.php"><img src = "image/logo.png" alt = "Logo"/></a> 
            <nav>
            
                <ul>
                    <li><a href="index.php">Home page</a></li>
					<li><a href="continents1.php">Continent</a></li>
					<li><a href="comparer.php">Compare</a></li>
					<li><a class="ici" href="scores.php">Score</a></li>
					<li><a href="apropos.html">About us</a></li>
                </ul>
            </nav>
            <input  class="gsearchsimple3 form-control input-lg"  name="recherche" type = "text" placeholder="Research">
            <ul class="list-group3">
                
            </ul>

        </header>
 <!-- Menu bandeau fin -->
 <img id= "Score" src = "image/ScoreLeaders.png" alt = "Photo ScoreLeaders"/> 
        <h2 id="ScoreLeaders">Score Leaders</h2>
        <!--<h2>Famille</h2> Pour mettre au point css-->

        <?php
        //Initialisation des variables
        $annee = "";
        $SCORE = "";
        $CONTINENT = "";
        ?>

        <!--Formulaire des filtres-->

        <form action="scores.php" method="post" autocomplete="off">
        <p id = "form_index">
            <INPUT class="formulaire_filtres" type="number" name="annee" value="" min="2015" max="2019" placeholder="Year">
        
        
            <SELECT class="formulaire_filtres" name="score">
                <option valeur="">--Choose a score--</option>
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
        //Récupération des filtres dans les variables
        if(isset($_POST['annee']))
            $annee = $_POST['annee'];
        if(isset($_POST['score']))
            $SCORE = $_POST['score'];
        if(isset($_POST['continent']))
            $CONTINENT = $_POST['continent'];
        
//En fonction des filtres, les différents scénarios dans les if
if($annee==""){ //Si aucune année n'est choisie
    echo "<div>";
    echo "<p class='àremplir'>Please select a year to observe</p>";
    echo "</div>";
}
elseif($SCORE=="--Choose a score--" && $CONTINENT=="--Choose a continent--"){ //Si aucun Score ni aucun Continent n'est choisi
        echo "<div>";
            echo "<p class='selection'>Year selected : ".$annee."</p>";    
            echo "<p class='selection'>Index selected : Hapiness Score</p>";                
            echo "<p class='selection'>Continent selected : World</p>";
        echo "</div>";

        echo '<table id="index_tab">';
        echo "<tr id='champs'><td>Country identifier</td><td>Country</td><td>Value Score</td><td>Rank</td></tr>";
        $rep = $bdd->query('SELECT avoir.Id_Pays, pays.Nom_Pays, avoir.annee, avoir.valeur_score, avoir.rang, score.Nom_Score, continent.Nom_Continent
                            FROM avoir, pays, annee, score, continent
                            WHERE avoir.Id_Pays=pays.Id_Pays 
                            AND avoir.annee=annee.Annee
                            AND avoir.Id_Score=score.Id_Score 
                            AND continent.Id_Continent=pays.Id_Continent
                            AND score.Nom_Score="Hapiness Score"
                            AND avoir.annee="'.$annee.'" 
                            ORDER BY avoir.rang ASC');
        //On parcourt les résultats de la requête SQL dans le fetch
        while ($ligne = $rep ->fetch()) {
            echo "<tr><td>".$ligne['Id_Pays']."</td><td>"."<a id='hover' href="."continents3.php?id_pays=".$ligne['Id_Pays']."&annee=".$annee.">".
            $ligne['Nom_Pays']."</a>"."</td><td>".$ligne['valeur_score']."</td><td>".$ligne['rang']."</td></tr>";
        }
        $rep ->closeCursor();
                                                            
        echo "</table>";
}     
elseif($SCORE=="--Choose a score--"){
    echo "<div>";
        echo "<p class='selection'>Year selected : ".$annee."</p>";    
        echo "<p class='selection'>Index selected : Hapiness Score</p>";
        echo "<p class='selection'>Continent selected : ".$CONTINENT."</p>";
    echo "</div>";

    echo '<table id="index_tab">';
    echo "<tr id='champs'><td>Country identifier</td><td>Country</td><td>Value Score</td><td>Rank</td></tr>";
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
}
elseif($CONTINENT=="--Choose a continent--"){ // Si aucun continent n'est choisi
    echo "<div>";
        echo "<p class='selection'>Year selected : ".$annee."</p>";
        echo "<p class='selection'>Index selected : ".$SCORE."</p>";
        echo "<p class='selection'>Continent selected : World</p>";
    echo "</div>";

    echo '<table id="index_tab">';
    echo "<tr id='champs'><td>Country identifier</td><td>Country</td><td>Value Score</td><td>Rank</td></tr>";
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
 else{ //Si tous les filtres sont choisis
    echo "<div>"; 
        echo "<p class='selection'>Year selected : ".$annee."</p>";    
        echo "<p class='selection'>Index selected : ".$SCORE."</p>";
        echo "<p class='selection'>Continent selected : ".$CONTINENT."</p>";
    echo "</div>";

    echo '<table id="index_tab">';
    echo "<tr id='champs'><td>Country identifier</td><td>Country</td><td>Value Score</td><td>Rank</td></tr>";
    $rep = $bdd->query('SELECT avoir.Id_Pays, pays.Nom_Pays, avoir.annee, avoir.valeur_score, avoir.rang, score.Nom_Score, continent.Nom_Continent  
                        FROM avoir, pays, annee, score, continent 
                        WHERE avoir.Id_Pays=pays.Id_Pays 
                        AND avoir.annee=annee.Annee 
                        AND avoir.Id_Score=score.Id_Score 
                        AND continent.Id_Continent=pays.Id_Continent
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

<!-- Fonction research avec autocomplétion -->
<script>
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

</body>

</html>