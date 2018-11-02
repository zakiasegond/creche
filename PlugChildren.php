<!DOCTYPE html>
    <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
            <title>fiche Enfants</title>
            
        </head>
        <body>
            <h1>Fiche Enfants</h1>


            <form method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="input">Firstname</label>
                  <input name="firstname" type="text" class="form-control" id="inputFirstname" placeholder="firstname">
                </div>

                <div class="form-group col-md-6">
                  <label for="input">Lastname</label>
                  <input name="lastname" type="text" class="form-control" id="inputLastname" placeholder="lastname">
                </div>
              </div>

              <div class="form-group">
                <label for="inputAddress">Adress</label>
                <input name="adress" type="text" class="form-control" id="inputAdress" placeholder="adress">
              </div>

              <div class="form-group">
                <label for="input">Birthday</label>
                <input name="birthday" type="date" class="form-control" id="inputBirthday" placeholder="birthday">
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="input">Contact Parents</label>
                  <input name="contact" type="text" class="form-control" id="inputContact">
                </div>

                <div class="form-group col-md-2">
                  <label for="input">Remarks</label>
                 <textarea name="remarks" type="textarea" class="form-control" aria-label="With textarea"></textarea>
                </div>
              </div>
              <button name="save" type="submit" class="btn btn-primary">Enregistrer</button>
              <!-- <button name="delete" type="submit" class="btn btn-primary">Supprimer</button> -->
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

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $birthday= $_POST['birthday'];
        $adress = $_POST['adress'];
        $contact = $_POST['contact'];
        $remarks = $_POST['remarks'];

        
        $bdd->query("INSERT INTO children(children_firstname, children_lastname, children_birthday, children_adress, children_contact_parents, children_remarks)

            VALUES ('" . $firstname . "', '" . $lastname . "', '" . $birthday ."', '" . $adress ."', '" . $contact ."', '" . $birthday ."')");

        header('Location: listChildren.php');
      
    }

?>
            <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
        </body>
    </html>