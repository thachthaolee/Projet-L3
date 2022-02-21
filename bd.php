<?php
    function getBD(){
        $bdd = new PDO('mysql:host=localhost;dbname=HapMap;charset=utf8', 'root', 'root');
        return $bdd;
    }
?>