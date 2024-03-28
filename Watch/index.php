<?php include 'include/header.php' ?>
<?php include 'include/connexion.php' ?>
<?php if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
?>

<div class="info">
    <h2 class="info-h2">Bienvenue chez Watch Company</h2>
    <div class="info-img-content">
        <img src="images/tinywow_pexels_antony_trivet_9982007_31190662_1.png" class="info-img">
    </div>
    <p class="info-p">Votre destination ultime pour des montres d'exception .
        Nous sommes fiers de vous présenter une collection rigoureusement sélectionnée de montres qui
        allient style, précision et qualité.
        Avec un héritage ancré dans l'art horloger et une vision résolument moderne, Watch Company
        incarne l'essence du temps sous sa forme la plus élégante.
    </p>
    <button class="info-btn">En savoir plus</button>
</div>
<article>
    <h3 class="titres_1"> SUGGESTIONS</h3>
    <div class="row produits">
        <div class="col-xl-6 col-md-12 col-sm-12">
            <?php include 'include/connexion.php'; 
            $req = mysqli_query($conn, "SELECT * FROM produits");
            while ($row = mysqli_fetch_assoc($req)) {    
            ?>
            <form method="GET" action="">
                <div class="electronic_watch">
                    <img src="images/électronic.png" <?=$row['img']?> class="image_1">
                    <section class="details_1">
                        <h5 class="titre"> <?=$row['name']?> </h5>
                        <p class="descri">Lorem ipsum dolor sit amet consectetur.</p>
                        <div class="prix">
                            <p class="prix">13.99$</p> <span class="prix"> <?=$row['prix']?> </span>
                        </div>
                        <a href="ajout_panier.php" <?=$row['id']?>><button class="panier">Ajouter au panier </button></a>
                    </section>
                </div>
            </form>
            <?php } ?>
        </div>
        <div class="col-xl-6 col-md-12 col-sm-12">
            <div class="electronic_watch">
                <img src="images/romansson.png" class="image_2">
                <section class="details_2">
                    <h5 class="titre"> Romansson</h5>
                    <p class="descri">Lorem ipsum dolor sit amet consectetur.</p>
                    <div class="prix">
                        <p class="prix">12.99$</p> <span class="prix">11.99$</span>
                    </div>
                    <button class="panier">Ajouter au panier </button>
                </section>
            </div>
        </div>
        <div class="col-xl-6 col-md-12 col-sm-12">
            <div class="electronic_watch">
                <img src="images/deepsea.png" class="image_3">
                <section class="details_3">
                    <h5 class="titre"> ROLEX Deepsea</h5>
                    <p class="descri">Lorem ipsum dolor sit amet consectetur.</p>
                    <div class="prix">
                        <p class="prix">16.99$</p> <span class="prix">15.99$</span>
                    </div>
                    <button class="panier">Ajouter au panier </button>
                </section>
            </div>
        </div>
        <div class="col-xl-6 col-md-12 col-sm-12">
            <div class="electronic_watch">
                <img src="images/fossil.png" class="image_4">
                <section class="details_4">
                    <h5 class="titre"> Fossil</h5>
                    <p class="descri">Lorem ipsum dolor sit amet consectetur.</p>
                    <div class="prix">
                        <p class="prix">12.99$</p> <span class="prix">11.99$</span>
                    </div>
                    <button class="panier">Ajouter au panier </button>
                </section>
            </div>
        </div>
    </div>
</article>
<aside class="decouvrir">
    <h3 class="titres_2">Nouvelles Collections</h3>
    <p class="decouvrir-p">Nouvelle Collection Éblouissante : L'Harmonie Horlogère par Watch Company</p>
    <button class="decouvrir-btn">Découvrir</button>
</aside>
<?php include 'include/footer.php' ?>