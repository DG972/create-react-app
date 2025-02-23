<?php
include ("fonction.php");

// Vérification connexion
$bdd = mysqli_connect('172.16.201.106', 'sio', 'slam', 'utilisateur');
    $email = $_POST['email'];
    $password =md5($_POST ['password']); 
    if($bdd){

    $requete = 'SELECT COUNT(*) AS verifInfos FROM user  WHERE email="'.$email.'" AND password="'.$password.'"';
    echo $requete;
    $resultat = mysqli_query($bdd, $requete);
    $donnes = mysqli_fetch_assoc($resultat);

    if($donnes["verifInfos"] == 1) {
        echo "connexion réussite";
    } else {
        echo "information  de connexion incorrect";
    }
}
else{
    echo'Erreur de connection';
}
?>



<!--

<html>
    <head>
        <link type="text/css" rel="stylesheet" media="all" href="../CSS/Connexion.css" />
        <script>
            function checkForm() {
                var email = document.getElementById('email').value;
                var password = document.getElementById('password').value;
                var messageElement = document.getElementById('message');

                if (email === '') {
                    messageElement.innerText = 'Veuillez saisir un nom utilisateur';
                    return false;
                } else if (password === '') {
                    messageElement.innerText = 'Veuillez saisir un mot de passe';
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body>
        <center>
            <div class="header"></div>
            <div class="minilogo" style="cursor: pointer" onclick="window.location.href='Panier.html'">
                <img src="imgduo/iconpn.png" width="50px">
            </div>
            <p class="Contact" onclick="window.location.href='Contact.html'">Contact</p>
            <p class="Accueil" onclick="window.location.href='veille2.html'">Accueil</p>
            <p class="Store" onclick="window.location.href='store.html'">Store</p>
            <div class="logoentreprise">
                <img src="imgduo/logoentreprise.jpg" width="200px">
            </div>
        </center>

        <form action="" method="POST">

            <h1>Connexion</h1>
            <div class="input1">
                <input id="email" type="text" autocomplet="off" name="email" placeholder="Email" required>
                <input id="password" type="password" autocomplet="off" name="password" placeholder="Mot de passe" required>
            </div>
            <p class="compte">Si vous n'avez pas de compte, <a href="inscription.php"><b>Inscrivez-vous</b></a></p>
            <div align="center">
                <button type="submit">Connexion</button>
                <button type="submit" class="Google">Connexion Google</button>
            </div>
            <div class="minilogo2">
                <img src="imgduo/googlelogo.png" width="35px">
            </div>
            <p id="message" style="color: red; text-align: center;"></p>
            <div id="successMessage"></div>
        </form>
    </body>
</html>
