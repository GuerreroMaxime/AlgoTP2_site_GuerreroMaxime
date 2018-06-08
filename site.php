<!DOCTYPE html>
<html>
	<head>
		<title>Choix</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="miseenforme.css" />
	</head>

	<body>	
		<h1>Site de ludus</h1>
		<p>Selectionnez votre niveau</p>
		
		<?php
		require_once('conect.php');
		?>

		<form action='info.php' id="form" method="get">

		<select name="liste1">
		<?php listecour(); ?>
		</select>

		
		<p><input type=submit Id="valid" value="Valider"></p>
		</form>

	</body>
</html>