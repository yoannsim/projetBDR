<?php
	include_once('fonctionSQL/SQLselectToArray.php');
?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8" />
	 <title>Recensement d' d'animaux </title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>


</head>
<body>
	<!-- Image and text -->

	<nav class="navbar sticky-top navbar-dark bg-secondary">
		<a class="navbar-brand" href="#">
			Recensement d' d'animaux
		</a>
		<div class="btn-group" role="group" aria-label="Basic example">
		<form name="x" action="newData/newExp.php" method="post">
		<button type="submit" class="btn btn-primary">nouvelle expedition</button>
		</form>
		<form name="x" action="delData/DeleteExp.php" method="post">
		<button type="submit" class="btn btn-primary">delete expedition</button>
		</form>
	</div>
	</nav>
	<a class="btn btn-primary" href="stat/zone.php" role="button">voir les zones</a>
	<a class="btn btn-primary" href="stat/animal.php" role="button">statistique par animale</a>
	<a class="btn btn-primary" href="stat/exp.php" role="button">voir les expedition</a>




<table class="table table-striped table-bordered" >
	<?php SQLselectToArray("SELECT COUNT(DISTINCT animal) AS 'espèce animale',COUNT(DISTINCT vegetal) AS 'espèce vegetal',COUNT(DISTINCT expedition) AS 'nombre d expedition' FROM globlView"); ?>
</table>



</body>
</html>
