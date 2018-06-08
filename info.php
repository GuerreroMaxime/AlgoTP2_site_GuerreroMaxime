<!DOCTYPE html>
<html>
	<head>
		<title>Classe</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="miseenforme.css" />
	</head>

	<body>	
		<h1>Site de ludus</h1>
		<p>Selectionnez votre classe</p>

		<?php
		require_once('conect.php');
		?>

		<form action='info2.php' id="form" method="get">

		<select name="liste1a">
		<?php
		$fondatio=$_GET["liste1"];
		echo "<option>".$fondatio."</option>";
		?>
		</select>

		<select name="liste2">
		<?php
			$maximun=0;
			$fondation=$_GET["liste1"];
			$compteur=1;

			if($fondation=="F1")
				$maximun=4;
			else
				$maximun=2;

			do{
			   echo "<option>".$compteur."</option>";
				$compteur=$compteur+1;
			}while($compteur<=$maximun);
		 ?>
		</select>

		<p><input type=submit Id="valid" value="Valider"></p>
		</form>
	</body>
</html>