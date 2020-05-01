<?php

/* appel de la BDD */
$bdd = new PDO('mysql:host=localhost;dbname=ecuriescamille;charset=utf8;port=3306', "root", "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

?>