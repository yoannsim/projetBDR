<?php
include_once('DBUtile.php');
?>

<?php

function SQLselectToArray($query){
	
	$connection = connexion();
	if (! ($query == "")){
		$rowAll = $connection->query( $query )->fetchAll(PDO::FETCH_ASSOC);
	   if(sizeof($rowAll) == 0){
		   echo "table vide";
		   die;
	   }
		$keyAll = array_keys($rowAll[0]);
	
		echo "<thead class=", "thead-dark"," ><tr>";
		// pour chaque ligne (chaque enregistrement)
		foreach ( $keyAll as $k ) 
		{
				echo "<th>". $k ."</th>";
		} 
		echo "
		</tr>
		</thead>
		<tbody>";
		// pour chaque ligne (chaque enregistrement)
		foreach ( $rowAll as $r ) 
		{
			// DONNEES A AFFICHER dans chaque cellule de la ligne

			echo "<tr>";
			
				// pour chaque ligne (chaque enregistrement)
			foreach ( $keyAll as $k ) 
			{
				 echo "<td>".$r[$k]."</td>"; 
			 }  	
			echo"</tr></tbody>";		
		}
		
	}
}
?>