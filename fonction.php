<?php
    function connexion(){
    $bdd=mysqli_connect('172.16.201.106','sio','slam','utilisateur');
		return $bdd;
		//si la connexion a réussi,rien ne se passe.
	 }
?>