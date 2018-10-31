<!DOCTYPE html>
	<html>
		<head>
			<title class="blog">liste enfants</title>
			<link href="bootstrap.min.css" rel="stylesheet">
		</head>
		<body>
			
			<h1 class="text-center">Liste Enfants</h1>

		<?php
			if (isset($_GET['see'])) 
			{    
		    	$id = $_GET['input'];
		   		$id = intval($id);
		   		$reponse = $bdd->query('SELECT * FROM children WHERE children_id='.$id) ;

		       	while($donnees=$reponse->fetch()) 
		   		{
			       echo
			           '<div class="card" style="width: 18rem;">
			           <div class="card-header">
			               '.$donnees['children_firstname']. ' ' .$donnees['children_lastname'].'
			           </div>
			               <ul class="list-group list-group-flush">
			                   <li class="list-group-item">'.$donnees['children_birthday'].'</li>
			                   <li class="list-group-item">'.$donnees['children_adress'].'</li>
			                   <li class="list-group-item">'.$donnees['children_parents_contact'].'</li>
			                   <li class="list-group-item">'.$donnees['children_remarks'].'</li>
			               </ul>
			           </div>';    
		    	};

			};
		?>
	</body>
</html>