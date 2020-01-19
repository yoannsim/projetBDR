<?php
include_once('DBUtile.php');
?>

<?php

function SQLinsert($query){
	
	$connection = connexion();
	$connection->exec( $query );
}
?>