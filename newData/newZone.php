
<?php
include_once('..\fonctionSQL/SQLinsert.php');

include_once('..\fonctionSQL/SQLoption.php');

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
			ajouter des zones
		</a>
		<form name="x" action="newExp.php" method="post">
		<button type="submit" class="btn btn-primary">continuer d' éditer l' expédition</button>
		</form>
	</nav>


	<form name = zone action="newZone.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">numero</label>
    <input name="numero" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter numero">
  </div>
  <div class="form-group">
		<div class="input-group">
  		<div class="input-group-prepend">
    		<label for="exampleInputEmail1">coodonée GPS</span>
				<input type="text" name="GPSlo"  placeholder="Enter longitude" class="form-control">
				<input type="text" name="GPSla"  placeholder="Enter latitude" class="form-control">
				<input type="text" name="GPSAltitude" placeholder="Enter altitude" class="form-control">
  		</div>
		</div>
  </div>
	<div class="form-group">
		<label for="exampleInputEmail1">type de terrain</label>
	  <select name="terrain" class="form-control" id="exampleFormControlSelect1">
		 <?php SQLoption("SELECT * FROM projet.typeterrain","nom","nom"); ?>
	 </select>
	</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


<?php
if(!empty($_POST['numero']) && !empty($_POST['GPSlo']) && !empty($_POST['GPSla'])&& !empty($_POST['GPSAltitude']) && !empty($_POST['terrain'])){
	SQLinsert("INSERT INTO zone (Numero,Altitude,Latitude,Longitude,nomTypeTerrain) VALUES(".$_POST['numero'].",".$_POST['GPSAltitude'].",".$_POST['GPSlo'].",".$_POST['GPSla'].",'".$_POST['terrain']."')");
	echo "incertion OK";
}
else{
		echo "incertion pas OK";
}
	?>





</body>
</html>
