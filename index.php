<!DOCTYPE html>
	<html>

		<head>
			<meta charset="utf-8">
			<link href="bootstrap.min.css" rel="stylesheet">
			<title>Crèche "Le Lapin Bleu"</title>
		</head>

		<body>

		<div class="text-center">			
			<h1>Crèche "Le Lapin Bleu"</h1>
			<h3>Page d'Accueil</h3>
			
			<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<p><form  method="POST" action="listChildren.php">
							<button type="submit" class="btn btn-lg btn-primary" name="ListChildren" id="ListChildren">Liste Enfants</button>
						</form></p>

						<p><form  method="POST" action="listActivity.php">	
							<button type="submit" class="btn btn-lg btn-success" name="ListActivity" id="ListActivity" >Liste Activités</button>
							
						</form></p>
					</div>
				</div>
			</div>
		</div>
	</head>

	<body>

		<?php
			ini_set('display_errors', 1);
			
			if(isset($_POST['envoyer']))
			{
				$login = $_POST['login'];
				$password = $_POST['password'];
				$pdo = new PDO('mysql:host=localhost;dbname=crèche', 'segond', 'loudmila32');
				$req = $pdo->query("SELECT * FROM admin");
				while($datas=$req->fetch())
				{
					if($datas['Identifiant'] == $login && $datas['motDePasse'] == $password)
					{
						$manager++;
					}
				}

			}

		?>
	</body>
</html>