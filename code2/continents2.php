<!DOCTYPE html>

<?php session_start(); ?>

<!-- Deuxième page de l'onglet qui affiche les statistiques d'un continent choisi puis d'un pays de ce continent -->

<html>
	<head>
		<meta  http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" href="Style/StyleHapMap.css?" type="text/css" media="screen" />
		<title>HapMap</title>
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
					<li><a class="ici" href="continents1.php">Continent</a></li>
					<li><a href="comparer.php">Compare</a></li>
					<li><a href="scores.php">Score</a></li>
					<li><a href="apropos.html">About us</a></li>
                </ul>
            </nav>
			<input  class="gsearchsimple3 form-control input-lg"  name="recherche" type = "text" placeholder="Research">
            <ul class="list-group3">
                
            </ul>

    </header>
	
	<div class="test">
		
		<?php 	require ('bd.php');
				$bdd = getBD();

				if($_GET['annee'] < 2015 || $_GET['annee'] > 2019){  //Si une année incorrecte est entrée dans l'URL, renvoie à la page précédante
					echo '<meta http-equiv="refresh" content="0; url=continents1.php">';
				}
				if($_GET['id_continent'] < 1 || $_GET['id_continent'] > 6){ //Si un id_Continent incorrect est entré dans l'URL, renvoie à la page précédante
					echo '<meta http-equiv="refresh" content="0; url=continents1.php?annee='.$_GET['annee'].'">';
				}
				
				$_SESSION['continent'] = $_GET['id_continent'];

				$rep = $bdd->query("SELECT * FROM continent WHERE Id_Continent=" .$_SESSION['continent']."");
							
				while ($mat=$rep-> fetch()){	//afficher le nom du continent choisi
					echo "<br/><br/><h1>".$mat['Nom_Continent']."</h1><br/><br/>";
				}
		?>
		
		
	<center>
		<?php //afficher le graphe qui représente la moyenne de chaque indice du continent
			echo '<div id =  "graphe">';
			echo '<img id="img_graphe" src="graphe.php?id_continent='.$_GET["id_continent"].'&annee='.$_GET["annee"].'"><br/>'; // call the fonction graphe as photo
			echo '</div>';
		?>
		
		</br>		
		<?php // Requête pour afficher la moyenne de chaque indice
		$rep = $bdd -> query('SELECT AVG(avoir.valeur_score) as moyenne, score.Nom_Score as nom
							  FROM score, avoir, pays, continent, annee
						      WHERE score.Id_Score = avoir.Id_Score
							  AND avoir.Id_Pays = pays.Id_Pays
							  AND pays.Id_Continent = continent.Id_Continent
							  AND annee.Annee= avoir.annee
							  AND score.Id_Score != 1
							  AND continent.Id_Continent="'. $_GET["id_continent"] . '"
							  AND annee.Annee ="' . $_GET["annee"] . '"
							  GROUP BY score.Id_Score
							  ORDER BY score.Id_Score');
												
												
			 $score = array();
			 $moyenne = array();
			 while ($ligne =$rep ->fetch()){
				 $score[]=$ligne['nom'];
				 $moyenne[]=$ligne['moyenne'];
				 echo '<div class="indice"><p>'.$ligne['nom']."</p>";
				 echo "<p>".$ligne['moyenne']."</p></div>";
			 }
			 
			 $rep -> closeCursor();
			 
		?>
		</center>
		<br/><br/>
		
		<?php //afficher les pays dans le continent	et le lien vers ce pays-là		
			echo '<div class="continents2">';
			$rep = $bdd->query("SELECT Nom_Pays, Id_Pays FROM pays WHERE Id_Continent =" .$_SESSION['continent']."");
			while ($ligne = $rep -> fetch()) {
				echo "<a href=continents3.php?id_pays=".$ligne['Id_Pays']."&annee=".$_GET['annee']."><li class='gros'>".$ligne['Nom_Pays']."</li></a>";
			}	
			$rep -> closeCursor();
			echo "</div>";
		?>
		
<!-- Fonction research avec autocomplétion -->
</div>		
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

