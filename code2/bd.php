<?php
    function getBD(){
        //Cette ligne de code sert à accéder à la BD si vous utilisez MAMP
        //$bdd = new PDO('mysql:host=localhost;dbname=HapMap;charset=utf8', 'root', 'root');

        //Cette ligne de code sert à accéder à la BD si vous utilisez WAMP
        //$bdd = new PDO('mysql:host=localhost;dbname=HapMap;charset=utf8','root', '');
        
        return $bdd;
    }
?>