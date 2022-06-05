<?php
header ("content-type: application/json; charset=utf-8");
$serveur='mysql:host=localhost:3308;dbname=gsb_context_android;charset=utf8';
$login="UtilisateurPHP";
$mdp="ProjetPHP1";
$conn= new PDO($serveur,$login,$mdp);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->exec("SET CHARACTER SET utf8"); // pour que PDO prenne en compte le codage utf8
$conn->exec("SET NAMES utf8"); // pour que PDO prenne en compte le codage utf8
?>