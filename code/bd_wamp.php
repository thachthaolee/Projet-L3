<?php
	function getBD(){
		$bdd = new PDO('mysql:host=localhost;dbname=hapmap;charset=utf8','root', '');
		return $bdd;
	}
?>