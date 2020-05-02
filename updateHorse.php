<?php

// vérification des valeurs saisies

$suite = true;
$msg = "";

// le nom est obligatoire
if (empty($_POST['nom'])) {
    $msg = $msg . "Le nom n'est pas renseigné !" . "</br>";
    $suite = false;
}

if ($suite) {
    if (!empty($_POST['poids'])) {
        if ($_POST['poids'] >= 45 && $_POST['poids'] <= 1500) {
            // $suite = true;
        } else {
            $msg = $msg . "Le poids doit être compris entre 45 et 1500 kg !" . "</br>";
            $suite = false;
        }
    }
    if (!empty($_POST['taille'])) {
        if ($_POST['taille'] >= 80 && $_POST['taille'] <= 220) {
            // $suite = true;
        } else {
            $msg = $msg . "La taille doit être comprise entre 80 et 220 cm !" . "</br>";
            $suite = false;
        }
    }
}

if ($suite) {

    $_FILES['photo'];
    $photo = $_FILES['photo'];

    $tailleDuFichier = $photo['size']; //

    $pathinfoData = pathinfo($photo['name']);
    $nomDuFichier = $pathinfoData['filename'];
    $extensionDuFichier = $pathinfoData['extension'];
    $nouveauNomDuFichier = $nomDuFichier . '-' . uniqid() . '.' . $extensionDuFichier;

    move_uploaded_file($photo['tmp_name'],  __DIR__  . '/assets/img/' . $nouveauNomDuFichier);

    // si tout est OK, modif du cheval dans la table
    require 'config/db.php';
    $request =  "UPDATE cheval 
                SET nom = :nom, race = :race, sexe = :sexe, poids = :poids, taille = :taille, photo = :photo
                WHERE id = :id";
    $response = $bdd->prepare($request);
    $response->execute([
        'nom'       =>  $_POST['nom'],
        'race'      =>  $_POST['race'],
        'sexe'      =>  $_POST['sexe'],
        'poids'     =>  $_POST['poids'],
        'taille'    =>  $_POST['taille'],
        'photo'     =>  $nouveauNomDuFichier,
        'id'        =>  $_GET['id']
    ]);

    header('Location: listeHorse.php');  /* affichage de la liste avec fiche mise à jour */
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
            <h3>Modification non valide</h3>
            <p><strong><?= $msg ?></strong></p>
            <a href="formUpdateHorse.php" class="btn btn-primary">Retour</a>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>