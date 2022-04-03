<!DOCTYPE html>
<html>
    <head>
        <?php
        require('bd.php');
        $bdd = getBD();
        ?>
        <title>HAPMAP</title>
        <meta http-equiv="Content-Type" 
            content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="Style/StyleHapmap.css?" type="text/css"
            media="screen" />
            
    <script src="mapdata.js"></script>
    <script src="worldmap.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="JsLocalSearch.js"></script>

    </head>
    <body>

        <!-- menu bandeau début -->
        <header>
            <img src = "image/logo.png" alt = "Logo"/> 
            <nav>
                <ul>
                    <li ><a class="ici" href="index.php">Home page</a></li>
					<li><a href="continents1.php">Continent</a></li>
					<li><a href="comparer.php">Compare</a></li>
					<li><a href="scores.php">Score</a></li>
					<li><a href="apropos.html">About us</a></li>
                    <!--Rajouter la fonction rechercher-->
                </ul>
            </nav>
            <input  class="gsearchsimple3" class="form-control input-lg"  name="recherche" type = "text" placeholder="Research">
            <ul class="list-group3">
                
            </ul>
            

        </header>
        <div id="CartePrincipal"> <!-- Keep map above fold -->
				<div id="map"></div>
			</div>
       

    </body>
</html>
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
