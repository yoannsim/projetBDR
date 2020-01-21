<?php
	include_once('..\fonctionSQL/SQLinsert.php');
  include_once('..\fonctionSQL/SQLselectToArray.php');
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
		 statistics par animal
		</a>
		<form name="x" action="..\index.php" method="post">
		<button type="submit" class="btn btn-primary">retour</button>
		</form>
	</nav>


<form name = vegetal action="animal.php" method="post">
<div class="form-group">
	<label for="exampleInputEmail1">animale</label>
  <select name="animal" class="form-control" id="exampleFormControlSelect1">
   <?php SQLoption("SELECT * FROM animalView","animalCommun","animalCommun"); ?>
 </select>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<table class="table table-striped table-bordered" >
  <?php if(!empty($_POST['animal']))SQLselectToArray("SELECT DISTINCT zone,maleMature,maleNonMature,femelleMature,femelleNonmature,(maleMature + maleNonMature + femelleMature + femelleNonmature) as total FROM animalView WHERE animalCommun = '".$_POST['animal']."';");
  ?>
</table>





</body>
</html>
