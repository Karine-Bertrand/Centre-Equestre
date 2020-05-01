<?php

// **************** à modifier avec contrôle d'accès selon identification
// **************** contrôle des saisies par rapport aux infos de la table user
$msg = "";
if (empty($_POST['email'])) {
    $msg = $msg . "L'adresse mail n'est pas renseignée !" . "</br>";
}
if (empty($_POST['pwd'])) {
    $msg = $msg . "Le mot de passe n'est pas renseigné !" . "</br>";
}
if (empty($_POST['role'])) {
    $msg = $msg . "Le type d'accès n'est pas renseigné !" . "</br>";
}

if (!empty($_POST['email']) && !empty($_POST['pwd']) && !empty($_POST['role'])) {
    switch ($_POST['role']) {
        case 'visiteur':
            $acces = "lecture";
            break;
        case 'staff':
            $acces = "limite";
            break;
        case 'admin':
            $acces = "complet";
            break;
        default:
            $acces = "lecture";
            break;
    }
    // session_reset();
    // session_start();
    // $_SESSION['typeAcces'] = $acces;
    header('Location: accueil.php');
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
            <h3>Echec de connexion</h3>
            <p><strong><?= $msg ?></strong></p>
            <a href="index.php" class="btn btn-primary">Retour</a>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>