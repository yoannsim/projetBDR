<?php
	include_once('..\fonctionSQL/SQLinsert.php');
  include_once('..\fonctionSQL/SQLselectToArray.php');
  include_once('..\fonctionSQL/SQLoption.php');
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
		 statistics par zone
		</a>
		<form name="x" action="..\index.php" method="post">
		<button type="submit" class="btn btn-primary">retour</button>
		</form>
	</nav>


<form name = vegetal action="zone.php" method="post">
<div class="form-group">
	<label for="exampleInputEmail1">zone</label>
  <select name="zone" class="form-control" id="exampleFormControlSelect1">
   <?php SQLoption("SELECT DISTINCT zone FROM globlView","zone","zone"); ?>
 </select>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<table class="table table-striped table-bordered" >
  <?php if(!empty($_POST['zone']))SQLselectToArray("SELECT DISTINCT animal,maleMature,maleNonMature,femelleMature,femelleNonmature,(maleMature + maleNonMature + femelleMature + femelleNonmature) as total FROM globlView WHERE zone = '".$_POST['zone']."';");
  ?>
</table>

<table class="table table-striped table-bordered" >
  <?php if(!empty($_POST['zone']))SQLselectToArray("SELECT animal, ROUND(100/(select SUM(maleMature+maleNonMature) from v1) * maleMature+maleNonMature, 2) as 'male(%)'
			 , ROUND(100/(select SUM(maleMature+maleNonMature) from v1) * femelleMature+femelleNonMature, 2) as 'femelle(%)'
	FROM V1 WHERE zone = '".$_POST['zone']."';");
  ?>
</table>





</body>
</html>
