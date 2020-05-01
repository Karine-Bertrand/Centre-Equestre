<?php

// vérification des valeurs saisies

$suite = true;
$msg = "";

// le nom est obligatoire
if (empty($_POST['nom'])) {
    $msg = $msg . "Le nom n'est pas renseigné !" . "</br>";
    $suite = false;
}
if ($suite){
    if (!empty($_POST['poids'])) {
        if($_POST['poids']>=45 && $_POST['poids'] <=1500){
            // $suite = true;
        }else{
            $msg = $msg . "Le poids doit être compris entre 45 et 1500 kg !" . "</br>";
            $suite = false;
        }
    }
    if (!empty($_POST['taille'])) {
        if ($_POST['taille'] >= 80 && $_POST['taille'] <= 220) {
            // $suite = true;
        }else{
            $msg = $msg . "La taille doit être comprise entre 80 et 220 cm !" . "</br>";
            $suite = false;
        }
    }

}
if ($suite){

    // si tout est OK, ajout d'un cheval dans la table
    require 'config/db.php';
    $request =  "INSERT INTO cheval (nom, race, sexe, poids, taille)
                VALUES (:nom, :race, :sexe, :poids, :taille)";
    $response = $bdd->prepare($request);
    $response->execute([
        'nom'   =>  $_POST['nom'],
        'race'  =>  $_POST['race'],
        'sexe'  =>  $_POST['sexe'],
        'taille'=>  $_POST['taille'],
        'poids' =>  $_POST['poids'],
    ]);

    header('Location: listeHorse.php');  /* affiche de la nouvelle liste mise à jour */
    }
    
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Echec</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <section class="jumbotron text-center">
            <div class="container">
                <h3>Echec de création</h3>
                <p><strong><?= $msg ?></strong></p>
                <a href="formCreateHorse.php" class="btn btn-primary">Retour</a>
            </div>
        </section>
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
