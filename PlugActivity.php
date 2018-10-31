<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <title>fiche Activités</title>
        
    </head>
    
    <body>
        <h1>Fiche Activités</h1>
        <!-- <h2>Bienvenue sur le formulaire d'inscription</h2> -->

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Name</span>
            </div>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">Type</span>
            </div>
            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Number Max Child</span>
            </div>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>

        <!-- <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Contact Parents</span>
            </div>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>

        <div class="input-group paddingBot">
            <div class="input-group-prepend">
                <span class="input-group-text">Remarks</span>
            </div>
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div> -->
        <div>
            <button id="save" name="save" type="submit" class="btn btn-primary">Enregistrer/Modifier</button>
            <button id="delete" name="delete" type="submit" class="btn btn-primary">Supprimer</button>
        </div>

    </body>
</html>