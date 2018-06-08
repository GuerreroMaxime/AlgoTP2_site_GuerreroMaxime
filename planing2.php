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

	<p>Vos donnés ont été rentré:</p>
	<?php
	$Jour=$_GET['lis1'];
	$Heur=$_GET['lis2'];
	$Prof=$_GET['lis3'];
	$Cour=$_GET['lis4'];
	$Fond=$_GET['lis5'];

	echo "Le ".$Jour." a ".$Heur." avec ".$Prof." en de ".$Cour." pour les ".$Fond;
	?>

	<?php
			$dsn="mysql:dbname=".BASE.";host=".SERVER;
			try{
			$connexion=new PDO($dsn,USER,PASSWD);
   			}
 		catch(PDOExeption $e){
 		printf("Echec de la connexion: %s\n",$e->getMessage());
 		exit();
 		}

 		 $sql="INSERT INTO `planning`(`Jour`, `Horaire`, `Prof`, `Cour`, `Classe`) VALUES '$Jour','$Heur','$Prof','$Cour','$Fond'";
 		 if(!$connexion->query($sql)) echo "Pb d'accès aux clients";
 		 else{
 			echo "Insertion réussi";
 			}
?>


	</body>
</html>