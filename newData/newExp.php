<?php
	include_once('..\fonctionSQL/SQLinsert.php');

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
			ajouter des expeditions
		</a>
		<a class="btn btn-primary" href="..\index.php" role="button">consulter les statistics</a>
		<a class="btn btn-primary" href="newUser.php" role="button">crée user</a>
		<a class="btn btn-primary" href="newAnim.php" role="button">crée animale</a>
		<a class="btn btn-primary" href="newPlante.php" role="button">crée plante</a>
		<a class="btn btn-primary" href="newZone.php" role="button">ajouter zone</a>
	</nav>


  <form name="dynamicForm" action="newAnim.php" method="post">

		<div class="form-group row">
  		<label for="example-date-input" class="col-2 col-form-label">Date</label>
  		<input class="form-control" name="date" type="date" value="2011-08-19" >
		</div>

		<div class="form-group">
    	<label for="but">bute de l' expedition</label>
    	<textarea name="but" class="form-control" rows="2"></textarea>
    </div>

		<div class="form-group">
	    <label for="exampleInputEmail1">temperature</label>
	    <input name="temperature" class="form-control"  aria-describedby="emailHelp" placeholder="temperature">
	  </div>

		<div class="form-group">
  		<label for="exampleInputEmail1">zone</label>
  	  <select name="zone" class="form-control" id="exampleFormControlSelect1">
  		 <?php SQLoption("SELECT * FROM projet.zone","Numero","Numero"); ?>
  	 </select>
  	</div>

		<div class="form-group">
  		<label for="exampleInputEmail1">météo</label>
  	  <select name="temp" class="form-control" id="exampleFormControlSelect1">
  		 <?php SQLoption("SELECT * FROM projet.temp","id","id"); ?>
  	 </select>
  	</div>

		<label for="exampleInputEmail1">Animale</label>
			<input class="btn btn-primary"  type="button" onclick="add(this);" value="+"/>
				<br /><br />
			<input class="btn btn-primary" type="submit" value="submit"/>
   </form>

</body>
</html>


<script type="text/Javascript" >

 function add(element){
	 var form = window.document.dynamicForm;
	 // We clone the add button
	 var add = element.cloneNode(true);
	 // Create a new HTML tag of type "input"
	 var field = document.createElement("input");
	 // The value filled in the form will be stored in an array
	 field.name = "champs[]";
	 field.type = "text";

	 // We create a new element of type "p" and we insert the field inside.
	 var bloc = document.createElement("p");
	 bloc.appendChild(field);
	 form.insertBefore(add, element);
	 form.insertBefore(bloc, element);
 }
</script>
