<?php
    include 'include/connexion.php';
    //verifier si une session existe
    if(!isset($_SESSION)){
    //demarer la session    
        session_start();
    }
    //création session
    if(!isset($_SESSION['panier'])){
        //on crée et on mets un tableau
        $_SESSION['panier'] = array();
    }
    //récuperer l'ID dans le lien
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    //vérifier avec l'ID si les produits existe
        $produits = mysqli_query($conn, "SELECT * FROM produits WHERE id = $id");    
        if(empty(mysqli_fetch_assoc($produits))){
            //si le produits n'existe plus
            die("Ce produit n'existe plus");
        }
    }
    //ajout de produit dans le panier
    if(isset($_SESSION['panier']['id'])){
        //si le produit est déja dans le panier
        $_SESSION['panier']['id']++; //ceci est la quantité
    } else {
        // si non on ajoute les produits
        $_SESSION['panier']['id'] = 1;
       //rédirection vers la page d'accueil
       header("Location:index.php");
    }
?>