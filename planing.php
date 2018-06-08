<!DOCTYPE html>
<html>
	<head>
		<title>Planning</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="miseenforme.css" />
	</head>

	<body>
	<h1>Site de ludus</h1>
		<?php
		require_once('conect.php');
		?>

	<table>
	<?php
	  $comp1=0;
 	  $comp2=0;
	  $dsn="mysql:dbname=".BASE.";host=".SERVER;
			try{
			$connexion=new PDO($dsn,USER,PASSWD);
   			}
 		catch(PDOExeption $e){
 		printf("Echec de la connexion: %s\n",$e->getMessage());
 		exit();
 		}
 	   $sql="SELECT * FROM `jour`";
 		if(!$connexion->query($sql)) echo "Pb d'accès aux clients";
 		else{
 			echo "<td></td>";
 			foreach ($connexion->query($sql) as $row)
 			{
 			echo "<td>".$row['Nom_Jour']."</td>\n";
 			}
 		}

 		$sql="SELECT * FROM `tranche_horaire`";
 		if(!$connexion->query($sql)) echo "Pb d'accès aux clients";
 		else{
 			foreach ($connexion->query($sql) as $row)
 			{
 			echo "<tr>";
 			echo "<td>".$row['DATE_DEBUT']." " .$row['DATE_FIN']."</td>\n";
 			for($comp1=0; $comp1<=6; $comp1++){
 			echo "<td> </td>";
 		}

 			echo "</tr>";
 			}
 		}
	 ?>
	</table>

	<br>
	<p>Rentrer un nouveau cour:</p>

	<form action='planing2.php' id="form" method="get">

	<select name="lis1">
	<?php listjour();?>
	</select>

	<select name="lis2">
	<?php listhoraire();?>
	</select>

	<select name="lis3">
	<?php listprof();?>
	</select>

	<select name="lis4">
	<?php listcour();?>
	</select>

	<select name="lis5">
	<?php listgroup();?>
	</select>

	<p><input type=submit Id="valid" value="Valider"></p>
	</form>

	
 </body>
</html>