<?php
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
	<html>
		<head>
			<title class="blog">détails enfants</title>
			<link href="bootstrap.min.css" rel="stylesheet">
		</head>
		<body>
			<h1 class="text-center">Détails</h1>


		<?php
			// require_once ('listChildren.php');
			$pdo = new PDO('mysql:host=localhost;dbname=creche', 'segond', 'loudmila32');
			try
			{
    			$bdd = new PDO('mysql:host=localhost;dbname=creche;charset=utf8', 'segond', 'loudmila32');
			}

			catch (Exception $e)
			{
        		die('Erreur : ' . $e->getMessage());
			}

			if (isset($_GET['info'])) 
			{    
		    	$id = $_GET['input'];
		   		$id = intval($id);
		   		$reponse = $bdd->query('SELECT * FROM children WHERE children_id='.$id) ;
		   		// $reponse = $bdd->query('SELECT * FROM childcare_history WHERE ch_id='.$id) ;


		       	while($donnees=$reponse->fetch()) 
		   		{
			       echo
			           '<div class="table table-striped": 18rem;">
			           		<div class="card-header">
			               		<strong>Nom/Prénom : </strong>'.$donnees['children_firstname']. ' ' .$donnees['children_lastname'].'
			           		</div>
			               	<ul class="list-group list-group-flush">
			                   <li class="list-group-item"><strong>Naissance : </strong>' .$donnees['children_birthday'].'</li>
			                   <li class="list-group-item"><strong>Adresse : </strong>'.$donnees['children_adress'].'</li>
			                   <li class="list-group-item"><strong>Contact : </strong>'.$donnees['children_contact_parents'].'</li>
			                   <li class="list-group-item"><strong>Remarques : </strong>'.$donnees['children_remarks'].'</li>

			               </ul>
			           </div>';    
		    	};

			};
		?>
	</body>
</html>