<?php
include("fonction.php");

// vérification de connexion
    $nom= $_POST['nom'];
    $prenom= $_POST['prenom'];
    $password= MD5($_POST['password']);
    $email= $_POST['email'];

    // Vérification du formulaire 
    $bdd = recup('172.16.201.106','sio','slam','utilisateur');
    $requete = 'INSERT INTO user(nom,prenom,password,email) VALUES ("'.$nom.'","'.$prenom.'","'.$password.'","'.$email.'")';
    echo $requete;
    $resultat = mysqli_query($bdd, $requete); 

    if ($resultat) {
        echo "Insertion réussie"; 
    } 
    else {
        echo 'Erreur lors de l\'insertion';
    }
    if($bdd){
        echo "connexion bdd réussite";
    }
    else {
    echo "Erreur à la base de données"; 
}
?>

?>
<!--

<html>
    <head>
        <link type="text/css" rel="stylesheet"media="all" href="../CSS/Inscription.css" />
            <script>
                  function connexion() {
                        var email = document.getElementById('email').value;
                        var password = document.getElementById('password').value;
                        var messageElement = document.getElementById('message');
                        if (email === '') {
                           messageElement.innerText = 'Veuillez saisir un nom d\'utilisateur';
                       } else if (password === '') {
                           messageElement.innerText = 'Veuillez saisir un mot de passe';
                        } else if (email === 'utilisateur@example.com' && password === 'motdepasse') {
                            messageElement.innerText = 'Connexion réussie !';
                        } else {
                            essageElement.innerText = 'Échec de la connexion. Vérifiez vos identifiants.';
                    }
                }

            </script>
    </head>
            <body>
                <center>
                    <div class="header"></div>
                        <div class="minilogo" style="cursor : pointer" onclick="window.location.href='Panier.html'">
                            <img src="imgduo/iconpn.png" width="50px">
                        </div>
                        <p class="Contact" onclick="window.location.href='Contact.html'">Contact</p>
                        <p class="Accueil"onclick="window.location.href='veille2.html'">Accueil</p>
                        <p class="Store" onclick="window.location.href='store.html'">Store</p>
                                <div class="logoentreprise">
                                    <img src="imgduo/logoentreprise.jpg" width="200px">
                                </div>
                </center>
                    <form  method="post" action="">
                            <h1>Inscription</h1>
                                <div class="input1">
                                    <label for="nom">Votre nom</label>
                                    <input id="nom" type="text" name="nom"placeholder="Entrer votre nom" required>
                                    </br>
                                    <label for="prenom">Votre prenom</label>
                                    <input id="Prenom" type="text" name="prenom"placeholder="Prenom" required>
                                    </br>
                                    <label for="password">password</label>
                                    <input  id="password" type="password"name="password" placeholder="Mot de passe" required>
                                     <label for="email">Votre email</label>  
                                    <input id="email" type="identifiant" name="email"placeholder="Email" required>

    
									
                                </div>
                                <p class = "compte">Vous avez un compte, <b>Connectez-vous</b> !</p>
                                <div align ="center">
                                    <button type="submit">Connexion</button>
                                    <button type="submit" class="Google">  Connexion Google</button>
                                </div>
                                    <div class="minilogo2">
                                        <img src ="imgduo/googlelogo.png" width="35px">
                                    </div>
                                    <p id="message" style="color: red; text-align: center;"></p>
        