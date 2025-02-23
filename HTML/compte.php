<?php
include("fonction.php");
if($bdd=mysqli_connect('172.16.201.1036','sio','slam','utilisateur')){
    $email =$_post('email');
    $password = md5 ($_post('password'));

}

// Vérification connexion
    $requete="SELECT COUNT"(*)as verif from utilisateur Where email=$_post['email'] and password=$_post['password']
    
    //résultat
    $resultat=mysqli_querry($bdd,$requete);
    $donnes=mysqli fetch asc ($resultat);
    echo $donnes ('utilisateur'
    //vérification si l'utilisateur entre dans la bdd
    echo $resultat['verif']
    if($resultat['verif']==1){
        echo "connexion réussite";
    }
    else{
        echo "erreur  de connexion";
    }
}
?>