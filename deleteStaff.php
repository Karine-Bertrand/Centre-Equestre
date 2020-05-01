<?php

require 'config/db.php';

$request = "DELETE FROM staff WHERE id=" . $_GET['id'];
$response = $bdd->prepare($request);
$response->execute(['id' => $_GET['id']]);

header('Location: listeStaff.php');

?>

