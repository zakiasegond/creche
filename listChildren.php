<!DOCTYPE html>
<html>
	<head>
		<title class="blog">liste enfants</title>
		<link href="bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		
		<h1 class="text-center">Liste Enfants</h1>
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

			$req = $bdd->query ('SELECT * FROM `children` WHERE children_id');
		?>



		<div class="news  col-sm-9" >
   			<table class="table table-striped">
				<?php
					while ($donnees = $req->fetch())
					{
		    			echo "<tr><td><button>  " . $donnees['children_id'] . "</td><td>" . $donnees['children_firstname'] . "</td><td>" . 
		    			$donnees['children_lastname']  . "</button></td></tr>" ;
					} // Fin de la boucle des articles.
					$req->closeCursor();
		    	?>
   			</table>

    		<em><a href="PlugChildren.php?localisation=<?php echo $donnees['id']; ?>">Formulaire Ajout</a></em>
    	</div>

	</body>
</html>