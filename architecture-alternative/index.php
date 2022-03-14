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

    </head>
    <body>


    


        <!-- menu bandeau début -->
        <header>
            <img src = "image/logo.png" alt = "Logo"/> 
            <nav>
            
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="#" >Continent</a></li>
                    <li><a href="comparer.php">Comparer</a></li>
                    <li><a href="scores.php">Score</a></li>
                    <li><a href="apropos.html" >A propos</a></li>
                    <!--Rajouter la fonction rechercher-->
                </ul>
            </nav>

            

        </header>
        <!-- menu bandeau fin -->
        <h2 id="ScoreLeaders">Score Leaders</h2>
        <!--<h2>Famille</h2> Pour mettre au point css-->

        <!--formulaire pour filtres-->
    
        <?php
        $SCORE = "";
        $CONTINENT = "";
        ?>

        <form class="formulaire_filtres" action="filtres.php" method="get" autocomplete="off">
        <p>
            <INPUT type="number"name="annee"value=""min="2015"max="2019"placeholder="Année">
        
            <!--<INPUT type="text" name="FiltreScore" value="<?php echo $SCORE?>"placeholder="Sélectionner">-->
<!--Je prefererais passer par l'id score que le nom du score-->
            <SELECT name="score">
                <option valeur="">--Please choose a Score--</option>
                <option valeur="<?php echo $SCORE?>">Hapiness Rank</option>
                <option valeur="<?php echo $SCORE?>">Hapiness Score</option>
                <option valeur="<?php echo $SCORE?>">Economy</option>
                <option valeur="<?php echo $SCORE?>">Family</option>
                <option valeur="<?php echo $SCORE?>">Health</option>
                <option valeur="<?php echo $SCORE?>">Freedom</option>
                <option valeur="<?php echo $SCORE?>">Trust</option>
                <option valeur="<?php echo $SCORE?>">Generosity</option>
                <option valeur="<?php echo $SCORE?>">Social Support</option>
            </SELECT>

<!--La on va avoir 2 pbs : comment on fait si on veut séléctionner sur le monde + les rang seront les généraux meme si on demande un continent-->
            <SELECT name="Continent">
                <option valeur="">--Please choose a <strong>continent</strong>--</option>
                <option valeur="<?php echo $CONTINENT?>">Africa</option>
                <option valeur="<?php echo $CONTINENT?>">Asia</option>
                <option valeur="<?php echo $CONTINENT?>">Australia</option>
                <option valeur="<?php echo $CONTINENT?>">Europe</option>
                <option valeur="<?php echo $CONTINENT?>">North America</option>
                <option valeur="<?php echo $CONTINENT?>">South America</option>
            </SELECT>
        
            <input type="submit" value="Appliquer filtres">
        </p>
        </form>

        