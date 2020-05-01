<?php

require 'config/db.php';

$request = "SELECT * FROM staff WHERE id=" . $_GET['id'];
$response = $bdd->query($request);
$staff = $response->fetch(PDO::FETCH_ASSOC);
$msg = "Suppression de la fiche de l'intervenant " . $staff['prenom'] . " " . $staff['nom'];

?>

<!doctype html>
<html lang="en">

<head>
    <title>Suppression</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="jumbotron text-center">
        <div class="container">
            <h3>Etes vous sûr ?</h3>
            <p><strong><?= $msg ?></strong></p>
            <a href="listeStaff.php" class="btn btn-primary">Annuler</a>
            <a href="deleteStaff.php?id=<?= $_GET['id'] ?>" class="btn btn-danger">Supprimer</a>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>