<!DOCTYPE html>

<!-- Première page de l'onglet qui affiche les statistiques d'un continent choisi puis d'un pays de ce continent -->

<html>
<head>
    <meta  http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		<?php
		if(!isset($_GET['annee'])){ //Si aucune année n'a été choisie, ouvrir une forme pour saisir année
		echo '
		<form action="continents1.php" method="get" autocomplete="off">
		<br/><br/><br/>
		<p id="t3">Please select a year :</p><p><INPUT id = "annee" type="number" name="annee" value="" min="2015" max="2019" placeholder="year"></p>
		<p><INPUT type= "submit" value = "Validate"></p>
		</form>
		<img src="image/carte.png" alt="image de carte" >';
		
		}elseif($_GET['annee'] > 2019 || $_GET['annee'] < 2015){ //Si l'année choisie est incorrecte, forcer de rechoisir correctement
		echo '
		<form action="continents1.php" method="get" autocomplete="off">
		<br/><br/><br/>
		<p id="t1">Please select a year :</p><p><INPUT id = "annee" type="number" name="annee" value="" min="2015" max="2019" placeholder="year"></p>
		<p><INPUT type= "submit" value = "Validate"></p>
		</form>';
		}
		
		else{ //Quand une année a été choisie, afficher les continents à choisir et envoyer vers la page de chaque continent
		    echo '<div class="continents1">';
			echo '<br/><br/><br/><br/><p id="t2">Please select the continent for the year '.$_GET['annee'].' :</p><br/><br/>';
			
				require ('bd.php');
				$bdd = getBD();

				$rep = $bdd -> query('SELECT * FROM continent');
				while ($ligne = $rep -> fetch()) {
					echo "<li class = 'lictn1' id= 'LE".$ligne['Id_Continent']."'><a href=continents2.php?id_continent=".$ligne['Id_Continent']."&annee=".$_GET['annee'].">".$ligne['Nom_Continent']."</a></li>";
				}
				
				
				$rep -> closeCursor();

			
		    echo '</div>';
        }?>
		</div>

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


