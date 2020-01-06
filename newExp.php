<?php 
	include_once('SQLselectToArray.php');
?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8" />
	 <title>Affichage simple avec Base de Donnees</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
	 
	 
</head>
<body>
	<!-- Image and text -->
	
	<nav class="navbar sticky-top navbar-dark bg-secondary">
		<a class="navbar-brand" href="#">
			ajouter des expeditions
		</a>
		<form name="x" action="http://localhost/projetBDR/DBtest.php" method="post">
		<button type="submit" class="btn btn-primary">consulter la base de donnée</button>
		</form>
	</nav>
	
	
	<a class="btn btn-primary" href="http://localhost/projetBDR/newUser.php" role="button">crée user</a>
	<a class="btn btn-primary" href="http://localhost/projetBDR/newAnim.php" role="button">crée animale</a>
	<a class="btn btn-primary" href="http://localhost/projetBDR/newPlante.php" role="button">crée plante</a>
	<a class="btn btn-primary" href="http://localhost/projetBDR/newZone.php" role="button">ajouter zone</a>
	
	
	
	
	
</body>
</html>
