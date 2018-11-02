<!DOCTYPE html>

<html>

	<head>
		<title class="blog">liste activités</title>
		<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
		<h1 class="text-center">Liste Activités</h1>

    	<em><a href="PlugActivity.php?localisation=<?php echo $donnees['id']; ?>">Formulaire d'Ajout</a></em>

		<?php
			$pdo = new PDO('mysql:host=localhost;dbname=creche', 'segond', 'loudmila32');
			try
			{
    			$bdd = new PDO('mysql:host=localhost;dbname=creche;charset=utf8', 'segond', 'loudmila32');
			}

			catch (Exception $e)
			{
        		die('Erreur : ' . $e->getMessage());
			}

			$req = $bdd->query('SELECT * FROM `activity` WHERE activity_id');
		?>

		
		<div class="news  col-sm-9" >
   			<table class="table table-striped">
				 <thead>
				   <tr>
				     <!-- <th scope="col"></th> -->
				     <th scope="col">Nom</th>
				     <th scope="col">Type</th>
				     <th scope="col">Nombre Max Enfants</th>
				     <th scope="col"></th>
				   </tr>
				 </thead>
				 <tbody>
				 	
				
				<?php
					while ($donnees = $req->fetch())
					{
		    			echo "<tr><td> " . $donnees['activity_name'] . "</td><td>" . $donnees['activity_type'] . "</td><td>" . $donnees['activity_number_max_child'] . "</td></tr>" ;
					} 

					// Fin de la boucle des articles.
					$req->closeCursor();
		    	?>
   			</table>

    	</div>

			<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
	</body>
</html>