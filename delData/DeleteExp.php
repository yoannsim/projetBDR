<?php
	include_once('..\fonctionSQL/SQLinsert.php');
  include_once('..\fonctionSQL/SQLselectToArray.php');
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
		<form name="x" action="..\index.php" method="post">
		<button type="submit" class="btn btn-primary">retour</button>
		</form>
	</nav>


	<form name = vegetal action="DeleteExp.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">numero</label>
    <input name="num" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nom latin">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="container-fluid">
<table class="table table-striped table-bordered" >
  <?php SQLselectToArray("SELECT * FROM expedition");?>
</table>

<?php
if(!empty($_POST['num']) ){
  SQLinsert("DELETE FROM expedition WHERE id =".$_POST["num"]);
	echo "incertion OK";
}
else{
		echo "incertion pas OK";
}
	?>



</body>
</html>
