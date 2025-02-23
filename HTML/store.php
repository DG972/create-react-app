<?php 

include("sessionpanier.php");
 
 
 if(!isset($_SESSION['panier']) || empty($_SESSION['panier'])) {
     // Initialiser la session 'panier' avec un tableau vide si elle n'existe pas
     $_SESSION['panier'] = array();
 }


// Récupération de l'id dans le lien
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Vérifier si le produit existe dans la base de données
    $query = "SELECT * FROM products WHERE id = $id";
    $result = mysqli_query($con, $query);
    
    if($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
        // Ajouter le produit au panier
        if(isset($_SESSION['panier'][$id])) {
            $_SESSION['panier'][$id]++;
        } else {
            $_SESSION['panier'][$id] = 1;
        }
    }
}
?>
<html>
<head>
  <link rel="stylesheet" href="../CSS/web2.css">

<body>

  <nav class="navbar">
    <div class="nav-left">
      <a href="store.php">store</a>
      <a href="veille2.html">Accueil</a>
      <a href="Contact.html">Conctact</a>
    </div>
    <div class="nav-center">
      <img src="image/display.jpg" alt="Votre Logo">
    </div>
    <div class="nav-right">
      <a href="Panier.php"><img width="70" src="image/panier.png"></a>
      <a href="Connexion.html"><img width="70" src="image/contact.png"></a>
    </div>
  </nav>

  <div class="slider-container">
  <div class="slider">
    <img src="image/casque42.jpg" alt="Image 1">
    <img src="image/noel.jpg" alt="Image 2">
    <img src="image/jeux.jpg" alt="Image 3">
    <!-- Ajoutez d'autres images si nécessaire -->
  </div>
  <button class="prev" onclick="prevSlide()">&#9664;</button>
  <button class="next" onclick="nextSlide()">&#9654;</button>
</div>
<script src="David/java.js"></script>




  </br>
  </br>
  </br>
  </br>
  </br>
  </br>

  
  <h1>nouveautés</h1>


  <div class="carte">
    <p class="casque">casque rx</p>
     <img src=" image/casque 6.png" class="modele" alt="Image 2">
     
    <div class="détail">
      <h1>952,00$</h1>
      <a href="Panier.php" class="id_products">acheter</a>
    </div>
  </div>

  <div class="carte">
    <p class="casque">casque tx</p>
    <img src=" image/casquexr.png" class="modele" alt="Image 2">
    <div class="détail">
      <h1>1000,00$</h1>
      <a href="Panier.php" class="id_products">acheter</a>
    </div>
  </div>


  <div class="carte">
    <p class="casque">casque 360°</p>
    <img src=" image/casque1.png" class="modele" alt="Image 3">
    <div class="détail">
      <h1>120,00$</h1>
      <a href="Panier.php" class="id_products">acheter</a>
    </div>
  </div>
  </br>
  <h1>Produits populaires</h1>
  <div class="carte">
    <p class="casque">casque rxt</p>
    <img src=" image/casque2.png" class="modele" alt="Image 4">
    <div class="détail">
      <h1>70,00$</h1>
      <a href="Panier.php?id=<?php echo $row['id']; ?>" class="id_products">acheter</a>

    </div>
  </div>

  <div class="carte">
    <p class="casque">casque playstation</p>
    <img src="image/casque5.png" class="modele" alt="Image 5">
    <div class="détail">
      <h1>60,00$</h1>
      <a href="Panier.php?id=<?php echo $row['id']; ?>" class="id_products">acheter</a>
    </div>
</div>



  <div class="carte">
    <p class="casque">casque nintendo</p>
    <img src="  image/casque3.png" class="modele" alt="Image 6">
    <div class="détail">
      <h1>50,00$</h1>
      <a href="Panier.php" class="id_products">acheter</a>
    </div>
  </div>
  <footer>
    <div class="contenu-footer">
      <div class="blo footer-services">
        <h3>Partenariat</h3>
        <ul class="listes-services">
          <li><a href="#"> Playstation </a></li>
          <li><a href="#"> nintendo </a></li>
          <li><a href="#"> Onsim </a></li>
        </ul>
      </div>
      <div class="contenu-footer">
        <div class="blo footer-services">
          <h3>rester en conctact</h3>
          <ul class="Rester en conctact">
            <li>08-68-42-941</a></li>
            <li> immersivedisplay@gmail.com</a></li>
            <li> 6rue Charles de Gaulle ,Paris vill7505 </a></li>
          </ul>
          <div class="contenu-footer">
            <div class="blo footer-services">
              <h3>Les horaires</h3>
              <ul class="Rester en conctact">
              <li>✅ Lun 10h-19h</a></li>
                <li>✅Mar 10h-19h</a></li>
                <li>✅ Mer 10h-19h</a></li>
                <li>✅Jeu 10h-19h</a></li>
                <li>✅Ven 10h-19h</a></li>
                <li>❌Sam fermé </a></li>
                <li>❌ Dim fermé</a></li>
              </ul>
              <div class="contenu-footer">
                <div class="blo footer-services">
                  <h3>Nos réseaux</h3>
                  <ul class="Rester en conctact">
                    <li><a href="#"><img width="20px" src="image/facebook.jpg" alt="iconesréseaux">facebook/monsite</a>
                    </li>
                    <li><a href="#"><img width="20px" src="image/youtube.png" alt="iconesréseaux">youtube/chanel</a>
                    </li>
                    <li><a href="#"><img width="20px" src=" image/twitter.png" alt="iconesréseaux">Twitter</a></li>
                  </ul>
                </div>
  </footer>


  </div>
  </div>
  </br>
</body>

</html>