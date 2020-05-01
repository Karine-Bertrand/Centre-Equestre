<?php

require 'config/db.php';

$request = "DELETE FROM cheval WHERE id=" . $_GET['id'];
$response = $bdd->prepare($request);
$response->execute(['id' => $_GET['id']]);

header('Location: listeHorse.php');

?>


