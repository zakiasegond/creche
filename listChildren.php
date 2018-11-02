<!DOCTYPE html>
<html>
	<head>
		<title class="blog">liste enfants</title>
		<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
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
			 <thead>
			   <tr>
			     <th scope="col">id</th>
			     <th scope="col">Nom</th>
			     <!-- <th scope="col"></th> -->
			     <th scope="col">Prénom</th>
			   </tr>
			 </thead>
			 <tbody>


				<?php
				
					while ($donnees = $req->fetch())
					{
		    			echo
			               '<tr>
			                   <th scope="row">'.$donnees['children_id'].'</th>
			                  	<form action="InfoChildren.php" method="get">
			                        <td>
			                           <button class="btn btn-light " name="info" type="submit" >'.$donnees['children_firstname'].'</button>
			                           <input class="invisible" name="input" value=' . $donnees['children_id'] . '>
			                        </td>
			                        <td>'.$donnees['children_lastname'].'</td>
			                    </form>
			               </tr>';



					} // Fin de la boucle des articles.
					$req->closeCursor();
		    	?>
		    	
   			</table>

    		<em><a href="PlugChildren.php?localisation=<?php echo $donnees['id']; ?>">Formulaire Ajout</a></em>
    	</div>

		<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
	</body>
</html>