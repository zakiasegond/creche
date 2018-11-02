<?php
ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <title>fiche Activités</title>
        
    </head>

    <body>
        
        <h1 class="text-center">Fiche Activités</h1>
            <em><a href="index.php?localisation=<?php echo $donnees['id']; ?>">Retour Accueil</a></em>

         <form method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="input">Name</label>
                  <input name="name" type="text" class="form-control" id="inputName" placeholder="name">
                </div>

                <div class="form-group col-md-6">
                  <label for="input">Type</label>
                  <input name="type" type="text" class="form-control" id="inputType" placeholder="type">
                </div>
              </div>

              <div class="form-group">
                <label for="input">Number Max Child</label>
                <input name="number" type="text" class="form-control" id="inputNumber" placeholder="number">
              </div>
        <div>
            <button id="save" name="save" type="submit" class="btn btn-primary">Enregistrer/Modifier</button>
            <!-- <button id="delete" name="delete" type="submit" class="btn btn-primary">Supprimer</button> -->
        </div>
    </form>


    <?php

    if(isset($_POST['save']))
    {

        try 
        {
         $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

         $bdd = new PDO('mysql:host=localhost;dbname=creche;charset=utf8', 'segond', 'loudmila32', $pdo_options);
        }

        catch (Exception $e)
        {

            die('Erreur : ' . $e->getMessage());

        }

        $name = $_POST['name'];
        $type = $_POST['type'];
        $number= $_POST['number'];

        
        $bdd->query("INSERT INTO activity(activity_name, activity_type, activity_number_max_child)

            VALUES ('" . $name . "', '" . $type . "', '" . $number ."')");

        header('Location: listActivity.php');
      
    }
?>
         <em><a href="listActivity.php?localisation=<?php echo $donnees['id']; ?>">Page Précédente</a></em>


        <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    </body>
</html>