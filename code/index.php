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
            <style>
            #ici{
    color: #148EFF;
    border-bottom: 2px solid #148EFF;
}
        </style>
    <script src="mapdata.js"></script>
    <script src="worldmap.js"></script>

    </head>
    <body>

        <!-- menu bandeau début -->
        <header>
            <img src = "image/logo.png" alt = "Logo"/> 
            <nav>
                <ul>
                    <li><a id="ici" href="index.php">Home page</a></li>
					<li><a href="continents1.php">Continent</a></li>
					<li><a href="comparer.php">Compare</a></li>
					<li><a href="scores.php">Score</a></li>
					<li><a href="apropos.html">About us</a></li>
                    <!--Rajouter la fonction rechercher-->
                </ul>
            </nav>

            

        </header>
        <div id="CartePrincipal"> <!-- Keep map above fold -->
				<div id="map"></div>
			</div>
       

    </body>
</html>
