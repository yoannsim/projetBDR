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
			Affichage simple avec Base de Donnees
		</a>
		<div class="btn-group" role="group" aria-label="Basic example">
		<form name="x" action="newExp.php" method="post">
		<button type="submit" class="btn btn-primary">nouvelle expedition</button>
		</form>
	</div>	
	</nav>
	
	
	<form method="POST" action="index.php" >
	  <input type="text" name="nom" placeholder="nom de la table"  />
	<input type="submit" class="btn btn-primary " value="Valider" />
	</form>
	
	<div class="container-fluid">
	<table class="table table-striped table-bordered" >
		<?php if(!empty($_POST['nom'])){SQLselectToArray("SELECT * FROM ".$_POST['nom']);}?>
	</table>
	</div>
	
	
</body>
</html>

