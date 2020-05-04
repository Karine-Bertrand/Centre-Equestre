<?php

// **************** à modifier avec contrôle d'accès selon identification
// **************** contrôle des saisies par rapport aux infos de la table user : à gérer sur le projet final
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

<?php include('partials/head.php') ?>

<section class="jumbotron text-center">
    <div class="container">
        <h3>Echec de connexion</h3>
        <p><strong><?= $msg ?></strong></p>
        <a href="index.php" class="btn btn-primary">Retour</a>
    </div>
</section>

<?php include('partials/script.php') ?>