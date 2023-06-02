<body>
        <div class = "products">
            <div class = "container">
                <h1 class = "lg-title">Bière Blonde Cadence</h1>
                <p class = "text-light">Découvre notre collection de bière inspiré des carnavals du monde entier !</p>

                <div class = "product-items">
                    <!-- single product -->
                    <?php 
                        echo "<script>";
                        echo "const bieres = " . json_encode($bieres) . ";";
                        echo "</script>";
                    ?>
                    <?php foreach ($bieres as $biere) : ?>
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                            <img src="public/images/<?php echo $biere['image']; ?>" alt="<?php echo $biere['nom']; ?>">
                            </div>
                            <div class = "product-btns">
                            <button type="button" class="btn-cart" id="add-to-cart-<?php echo $biere['id_biere']; ?>">Ajouter au panier <span><i class="fas fa-plus"></i></button>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title"><?php echo $biere['nom']?></h2>
                                <div class = "rating">
                                  <span> <ion-icon name="star"></ion-icon></span> <!-- Etoile 1 -->
                                  <span> <ion-icon name="star"></ion-icon></span> <!-- Etoile 2 -->
                                  <span> <ion-icon name="star"></ion-icon></span> <!-- Etoile 3 -->
                                  <span> <ion-icon name="star"></ion-icon></span> <!-- Etoile 4 -->
                                 <span> <ion-icon name="star-half-outline"></ion-icon></span> <!-- Etoile 5 -->
                                </div>
                            </div>
                            <a href = "#" class = "product-name"><?php echo $biere['description']?></a>
                            <p class = "product-price"><?php echo $biere['prix']; ?> €</p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                        <button id="openModal">Ouvrir la pop-up</button>
                        <?php include 'app/view/part/client.formulaire.php' ?>
                </div>
            </div>
        </div>
 </body>
<script>
    ScrollReveal({ 
    distance: '120px',
    duration: 2000,
    delay: 200 
  });
  
  ScrollReveal().reveal('.product', { origin: 'top' });
</script>