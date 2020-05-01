<?php

require 'config/db.php';

    $request = "DELETE FROM cavalier WHERE id=" . $_GET['id'];
    $response = $bdd->prepare($request);
    $response->execute(['id' => $_GET['id']]);

header('Location: listeJockey.php');

?>

