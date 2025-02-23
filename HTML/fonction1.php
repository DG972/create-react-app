<?php 
//connexion à la base de données
$bdd = mysqli_connect("172.16.201.106","sio","slam","panier");
//verifier la connexion
if(!$bdd) die('Erreur : '.mysqli_connect_error());



?>