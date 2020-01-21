<?php
	include_once('..\fonctionSQL/SQLinsert.php');
?>


<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8" />
	 <title>Recensement d'animaux</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>


</head>
<body>
	<!-- Image and text -->

	<nav class="navbar sticky-top navbar-dark bg-secondary">
		<a class="navbar-brand" href="#">
			ajouter des utilisateurs
		</a>
		<form name="x" action="newExp.php" method="post">
		<button type="submit" class="btn btn-primary">continuer d' éditer l' expédition</button>
		</form>
	</nav>

<div class="container-sm">
<form name = newuser action="newUser.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nom">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prenom</label>
    <input name="prenom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter prenom">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php
if(!empty($_POST['nom']) && !empty($_POST['prenom'])){
	SQLinsert("INSERT INTO utilisateur (Nom,Prenom) VALUES ('".$_POST['nom']."','".$_POST['prenom']."')");
	echo "incertion OK";
}
	?>



</body>
</html>
