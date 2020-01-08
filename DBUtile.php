<?php
define("PDO_HOST", "localhost"); 
define("PDO_DBBASE", "projet");
define("PDO_USER", "test");
define("PDO_PW", "");

function connexion()
{
	try{
		$connection = new PDO( 
		"mysql:host=" . PDO_HOST . ";".
		"dbname=" . PDO_DBBASE, PDO_USER, PDO_PW );
	}
	catch (PDOException $e){
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
	return $connection;
}
?>