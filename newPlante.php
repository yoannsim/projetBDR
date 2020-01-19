<?php
	include_once('SQLinsert.php');
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
			ajouter des plantes
		</a>
		<form name="x" action="newExp.php" method="post">
		<button type="submit" class="btn btn-primary">continuer d' éditer l' expédition</button>
		</form>
	</nav>


	<form name = vegetal action="newPlante.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nom latin</label>
    <input name="nomLatin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nom latin">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Non vulgaire</label>
    <input name="nomVulgaire" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nom vulgaire">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php
if(!empty($_POST['nomLatin']) && !empty($_POST['nomVulgaire'])){
	SQLinsert("INSERT INTO typeetrevivant (nomLatin,nomVulgaire)  VALUES('" .$_POST['nomLatin']."','".$_POST['nomVulgaire']."')");
	SQLinsert("INSERT INTO vegetal (nomLatinTypeEtreVivant)  VALUES('" .$_POST['nomLatin']."')");
	echo "incertion OK";
}
else{
		echo "incertion pas OK";
}
	?>



</body>
</html>
