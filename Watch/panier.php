<?php include 'include/header.php' ?>
<?php 
include 'include/connexion.php';

    //supprimer les produits
    //si la variable del existe
    if(isset($_GET['del'])){
        $id_del = $_GET['del'];
        //suppression
        unset($_SESSION['panier']['id_del']);
    }
?>
<section class="boutique">
    <div class="container-xxl">
        <table>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Action</th>
            </tr>
            <?php
            $total = 0;
            //récuperer les clés du tableau session
            $id = array_keys($_SESSION['panier']);
            //s'il y pas de clé dans le tableau
            if(empty($ids)){
                echo"Le panier est vide";
            } else {
                //si oui
                $produits = mysqli_query($conn, "SELECT * FROM produits WHERE id IN (".implode(',', $id).")");

                //lire des produits avec la boucle foreach
                foreach($produits as $produits):
                    //calcul des prix
                $total = $total + $produits['prix'] * $_SESSION['panier'][$produits['id']];
            ?>
            <tr>
                <td class="image"><img src="images/ambassador.png"<?=$produits['img']?> ></td>
                <td><?=$produits['name']?></td>
                <td><?=$produits['prix']?>$</td>
                <td><?=$produits['id']?></td>
                <td><a href="panier.php?del=<?=$produits['img']?>"><i class="fas fa-trash-alt"></i></a></td>
            </tr>
            <?php endforeach ;} ?>
            <tr class="total">
                <th>Total: <?$total?>$</th>
            </tr>
        </table>
        </form>
    </div>
</section>

<?php include 'include/footer.php' ?>