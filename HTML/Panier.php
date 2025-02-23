<?php 
   session_start();
   include ("fonction1.php");

   //supprimer les produits
   //si la variable del existe
   if(isset($_GET['del'])){
    $id_del = $_GET['del'] ;
    //suppression
    unset($_SESSION['panier'][$id_del]);
   }
?>





<html>
        <head>
            <link type="text/css" rel="stylesheet"media="all" href="../CSS/panier.css" />
        </head>

        
            <body>


                    <center>
                        <div class="header"></div>
                        <div class="minilogo" style="cursor : pointer">
						   <img src="imgduo/minilogo.png"  onclick="window.location.href='Connexion.html'" width="50px">
						  </div>
                          <p class="Contact" onclick="window.location.href='Contact.html'">Contact</p>
                          <p class="Accueil"onclick="window.location.href='veille2.html'">Accueil</p>
                          <p class="Store" onclick="window.location.href='store.php'">Store</p>
                        <div class="logoentreprise">
                            <img src="imgduo/logoentreprise.jpg" width="200px">
                        </div>
                         
                        <div class="panier">
                        <section>
                            <table>
                                <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                    <th>Action</th>
                                    <?php 
              $total = 0 ;
              // liste des produits
              //récupérer les clés du tableau session
              $ids = array_keys($_SESSION['panier']);
              //s'il n'y a aucune clé dans le tableau
              if(empty($ids)){
                echo "Votre panier est vide";
              }else {
                //si oui 
                $products = mysqli_query($bdd, "SELECT * FROM products WHERE id IN (".implode(',', $ids).")");

                //lise des produit avec une boucle foreach
                foreach($products as $product):
                    //calculer le total ( prix unitaire * quantité) 
                    //et aditionner chaque résutats a chaque tour de boucle
                    $total = $total + $product['price'] * $_SESSION['panier'][$product['id']] ;
                ?>
                <tr>
                    <td><img src="image/<?=$product['img']?>"></td>
                    <td><?=$product['name']?></td>
                    <td><?=$product['prix']?>€</td>
                    <td><?=$_SESSION['panier'][$product['id']] // Quantité?></td>
                    <td><a href="panier.php?del=<?=$product['id']?>"><img src="image/delete.png"></a></td>
                </tr>
                <?php endforeach ;} ?>

                <tr class="total">
                <th>Total : <?=$total?>€</th>
                </tr>
                        </table>
                         </section>
                        </div> 
            </body>
</html>