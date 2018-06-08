<!DOCTYPE html>
<html>
	<head>
		<title>Niveau</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="miseenforme.css" />
	</head>

	<body>	
		<h1>Site de ludus</h1>

		<?php
		require_once('conect.php');
		?>

		<p>Votre classe de 
		<?php
		$nivaux=$_GET["liste2"];
		$fondat=$_GET["liste1a"];
		$classe= $fondat . $nivaux;
		echo $classe
		?>
		</p>

		<?php
			$dsn="mysql:dbname=".BASE.";host=".SERVER;
			try{
			$connexion=new PDO($dsn,USER,PASSWD);
   			}
 		catch(PDOExeption $e){
 		printf("Echec de la connexion: %s\n",$e->getMessage());
 		exit();
 		}
 		$sql="SELECT `NOM_ELEVE`, `PRENOM_ELEVE` FROM `eleve` WHERE `FONDATION_Classe`= '$classe'";
 		if(!$connexion->query($sql)) echo "Pb d'accès aux clients";
 		 else{
 		 	echo "<table>";
 			foreach ($connexion->query($sql) as $row)
 			{
 			echo "<tr><td>".$row['NOM_ELEVE']." ".$row['PRENOM_ELEVE']."</tr></td>\n";
 			}
 		echo "</table>";
 		}
?>

	</body>
</html>