	<?php
		define('SERVER',"localhost");
		define('BASE',"ludus_bdd_2.0");
		define('USER',"root");
		define('PASSWD',"");
	
		$dsn="mysql:dbname=".BASE.";host=".SERVER;
			try{
			$connexion=new PDO($dsn,USER,PASSWD);
   			}
 		catch(PDOExeption $e){
 		printf("Echec de la connexion: %s\n",$e->getMessage());
 		exit();
 		}
	?>

<?php
	function listecour(){
			$dsn="mysql:dbname=".BASE.";host=".SERVER;
			try{
			$connexion=new PDO($dsn,USER,PASSWD);
   			}
 		catch(PDOExeption $e){
 		printf("Echec de la connexion: %s\n",$e->getMessage());
 		exit();
 		}

 		 $sql="SELECT * from classe";
 		 if(!$connexion->query($sql)) echo "Pb d'accès aux clients";
 		 else{
 			echo "Liste des clients: <br>";
 			foreach ($connexion->query($sql) as $row)
 			{
 			echo "<option>".$row['FONDATION_Classe']."</option>\n";
 			}
 		}
	}
?>


<?php
	function listjour(){
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
 			echo "Liste des clients: <br>";
 			foreach ($connexion->query($sql) as $row)
 			{
 			echo "<option>".$row['Nom_Jour']."</option>\n";
 			}
 		}
	}
?>

<?php
	function listhoraire(){
			$dsn="mysql:dbname=".BASE.";host=".SERVER;
			try{
			$connexion=new PDO($dsn,USER,PASSWD);
   			}
 		catch(PDOExeption $e){
 		printf("Echec de la connexion: %s\n",$e->getMessage());
 		exit();
 		}

 		 $sql="SELECT * FROM `tranche_horaire`";
 		 if(!$connexion->query($sql)) echo "Pb d'accès aux clients";
 		 else{
 			echo "Liste des clients: <br>";
 			foreach ($connexion->query($sql) as $row)
 			{
 			echo "<option>".$row['DATE_DEBUT']."-".$row['DATE_FIN']."</option>\n";
 			}
 		}
	}
?>

<?php
	function listprof(){
			$dsn="mysql:dbname=".BASE.";host=".SERVER;
			try{
			$connexion=new PDO($dsn,USER,PASSWD);
   			}
 		catch(PDOExeption $e){
 		printf("Echec de la connexion: %s\n",$e->getMessage());
 		exit();
 		}

 		 $sql="SELECT * FROM `enseignant` ";
 		 if(!$connexion->query($sql)) echo "Pb d'accès aux clients";
 		 else{
 			echo "Liste des clients: <br>";
 			foreach ($connexion->query($sql) as $row)
 			{
 			echo "<option>".$row['NOM_ENSEIGNANT']." ".$row['PRENOM_ENSEIGNANT']."</option>\n";
 			}
 		}
	}
?>

<?php
	function listcour(){
			$dsn="mysql:dbname=".BASE.";host=".SERVER;
			try{
			$connexion=new PDO($dsn,USER,PASSWD);
   			}
 		catch(PDOExeption $e){
 		printf("Echec de la connexion: %s\n",$e->getMessage());
 		exit();
 		}

 		 $sql="SELECT `MATIERE_COUR` FROM `cour`";
 		 if(!$connexion->query($sql)) echo "Pb d'accès aux clients";
 		 else{
 			echo "Liste des clients: <br>";
 			foreach ($connexion->query($sql) as $row)
 			{
 			echo "<option>".$row['MATIERE_COUR']."</option>\n";
 			}
 		}
	}
?>

<?php
	function listgroup(){
			$dsn="mysql:dbname=".BASE.";host=".SERVER;
			try{
			$connexion=new PDO($dsn,USER,PASSWD);
   			}
 		catch(PDOExeption $e){
 		printf("Echec de la connexion: %s\n",$e->getMessage());
 		exit();
 		}

 		 $sql="SELECT `FONDATION_Classe`FROM `classe`";
 		 if(!$connexion->query($sql)) echo "Pb d'accès aux clients";
 		 else{
 			echo "Liste des clients: <br>";
 			foreach ($connexion->query($sql) as $row)
 			{
 			echo "<option>".$row['FONDATION_Classe']."</option>\n";
 			}
 		}
	}
?>