<?php include 'ajout_panier.php'?>
<?php include 'include/connexion.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['connexion'])) {
    $name_user = $_POST['name_user'];
    $forename = $_POST['forename'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `users` (`id`, `name_user`, `forename`, `mail`, `password`) VALUES (NULL, '" . $name_user . "', '" . $forename . "', '" . $mail . "', '" . $password . "');";
    if ($conn->query($sql) === TRUE) {
        echo "Connecté";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/fonts.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container-xxl">
            <nav class="navbar navbar-expand-xl">
                <div class="container-fluid">
                    <img src="images/gold_luxury_business_logo_1.png" class="logo_nav">
                    <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <i class="fas fa-bars" id="hamburger"></i>
                    </button>
                    <div class=" sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <span class="compte_1"></span>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 link">
                                <li class="nav-item">
                                    <a class="nav-link active accueil" aria-current="page" href="index.php">Accueil</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle links1" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Modèles
                                    </a>
                                    <ul class="dropdown-menu drop" aria-labelledby="offcanvasNavbarDropdown">
                                        <li><a class="dropdown-item dropmenu" href="femme.php">Femme</a></li>
                                        <li>
                                            <hr class="dropdown-divider hr">
                                        </li>
                                        <li><a class="dropdown-item dropmenu" href="homme.php">Homme</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link links1" href="propos.php">A propos</a>
                                </li>
                            </ul>
                            <div class="connexion1">
                                <button class="btn btn-outline-success connexion" data-bs-toggle="modal" data-bs-target="#exampleModal" type="submit">CONNEXION</button>
                                <span class="compte_2"></span>
                                <a href="panier.php" class="shop"> <img src="images/shop.svg"class="shop"> <span class="ajout_panier"> <?=array_sum($_SESSION['panier'])?> </span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content page_connexion">
                <div class="modal-header header_login">
                    <h1 class="modal-title fs-5 new_account" id="exampleModalLabel">Créer un nouveau compte</h1>
                    <div class="login">
                        <p class="login-p">Déja un compte?</p> <a href="#" class="sign"><span class="sign_in">Se connecter</span></a>
                    </div>
                    <div class="modal-body coordonate">
                        <form method="POST" action="" class="inscription">
                            <div id="coordonate">
                                <input type="text" name=" name_user" class="coordonate_nom" placeholder="Nom" required>
                                <input type="text" name=" forename" class="coordonate_prénom" placeholder="Prénom" required>
                            </div>
                            <input type="e-mail" name=" mail" class="coordonate_mail" placeholder="E-mail" required>
                            <input type="password" name=" password" class="coordonate_password" placeholder="Mot de passe" required>
                            <div class="modal-footer Footer">
                                <button type="submit" name="connexion" class="btn btn-primary connexion-btn">Connexion</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container-xxl">