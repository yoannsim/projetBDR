<?php
include_once('DBUtile.php');
?>

<?php

function SQLoption($query,$rowNam,$rowValue){

	$connection = connexion();

		$rowAll = $connection->query( $query )->fetchAll(PDO::FETCH_ASSOC);
	   if(sizeof($rowAll) == 0){
		   echo "table vide";
		   die;
	   }

		// pour chaque ligne (chaque enregistrement)
		foreach ( $rowAll as $r )
		{
			echo "<option value= \"".$r[$rowValue]."\">";
      echo  $r[$rowNam];
			echo"</option>";
		}
}
?>
