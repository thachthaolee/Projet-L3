<!DOCTYPE html>

<?php session_start(); ?>

<!-- Troisième page de l'onglet qui affiche les statistiques d'un continent choisi puis d'un pays de ce continent -->


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
	<br/><br/><br/>
	
	
		
		<?php 	require ('bd.php');
				$bdd = getBD();
				//afficher le nom du pays
				$nompays = "";

				$pays = $_GET['id_pays'];

				$rep = $bdd->query("SELECT * FROM pays WHERE Id_Pays= $pays");
							
				while ($mat=$rep-> fetch()){	
					$nompays = $mat['Nom_Pays'];
				}
				$rep->closeCursor();
				echo "<h1>".$nompays."</h1><br/>";
		?>		
		<br/>
		<br/>	
		<br/>
		
	<center>	

	<?php
		$bon = $bdd-> query ("SELECT id_pays FROM avoir");
		$tab=array();
        while($lol= $bon-> fetch()){
            $tab[]=$lol['id_pays'];
        }
        $bon-> closeCursor();
		if(!in_array($pays,$tab)){
			echo "<p class='indispo'>The selected country is not available</p>";
			echo '<meta http-equiv="refresh" content="3; url=continents2.php?id_continent='.$_SESSION['continent'].'&annee='.$_GET['annee'].'">';
		}else{ //Requête le résultat de chaque indice d'après années et id_pays puis les afficher
			$rep = $bdd -> query('SELECT AVG(avoir.valeur_score) as moyenne, score.Nom_Score as nom
								  FROM score, avoir, pays, continent, annee
								  WHERE score.Id_Score = avoir.Id_Score
								  AND avoir.Id_Pays = pays.Id_Pays
								  AND pays.Id_Continent = continent.Id_Continent
								  AND annee.Annee= avoir.annee
								  AND score.Id_Score != 1
								  AND pays.Id_Pays="'. $_GET["id_pays"] . '"
								  AND annee.Annee ="' . $_GET["annee"] . '"
								  GROUP BY score.Id_Score
								  ORDER BY score.Id_Score');
											 
			$score = array();
			$moyenne = array();
			while ($ligne =$rep ->fetch()){
				$score[]=$ligne['nom'];
				$moyenne[]=$ligne['moyenne'];
			}
			
			$rep -> closeCursor();

			if($moyenne==array() && $_GET['annee']!='avg'){
				echo "<p class='indispo'>Data not available for ".$nompays." in ".$_GET['annee']."</p>";
				echo '<meta http-equiv="refresh" content="3; url=continents1.php">';
			}else{
				echo '<div id="graphe">';
				echo '<img id="img_graphe" src="graphe1.php?id_pays='.$_GET["id_pays"].'&annee='.$_GET["annee"].'">'; // call the fonction graphe1 as photo
				echo '</div>';
				if($_GET['annee']=='avg'){
					$rep = $bdd -> query('SELECT AVG(avoir.valeur_score) AS moyenne, score.Nom_Score AS nom
										FROM score, avoir, pays, continent, annee
										WHERE score.Id_Score = avoir.Id_Score
										AND avoir.Id_Pays = pays.Id_Pays
										AND pays.Id_Continent = continent.Id_Continent
										AND annee.Annee= avoir.annee
										AND score.Id_Score != 1
										AND pays.Id_Pays="'. $_GET["id_pays"] . '"
										GROUP BY score.Id_Score
										ORDER BY score.Id_Score');
													
													
				$score = array();										
				$moyenne = array();
								
				while ($ligne =$rep ->fetch()){
					$score[]=$ligne['nom'];							
					$moyenne[]=$ligne['moyenne'];								
				}
				
				$rep -> closeCursor();
				for($i=0; $i < count($score); $i++){
					echo '<div class="indice"><p>'.$score[$i]."</p>";
					echo '<p>'.$moyenne[$i]."</p></div>";									
				}

				}else{
					for($i=0; $i < count($score); $i++){
						echo '<div class="indice"><p>'.$score[$i]."</p>";
						echo '<p>'.$moyenne[$i]."</p></div>";
					}
				}	
			}

			//Lien vers  comparer.php
			$rep = $bdd->query("SELECT * FROM pays WHERE Id_Pays= $pays");
								
			while ($mat=$rep-> fetch()){	
				echo "<br/><br/><a href='deco.php?pays1=".$mat['Nom_Pays']."&continent=1'><h3>Compare</h3></a><br/>";
			}
			$rep->closeCursor();

			if($_GET['annee']=='avg'){
				echo '<p class = "avg">* These data represent an average of the indicators over different years from 2015 to 2019<p>';
			}
		}
			
	?>
	</center>	
	
				
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