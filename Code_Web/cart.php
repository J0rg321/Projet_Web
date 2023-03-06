<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="container">
    <div div="row">
        <nav class="navbar navbar-expand-lg bg-brown">
            <div class="container-fluid d-flex justify-content-between">
                <div>
                    <a href="Accueil.html">
                        <img src="Images/LogoWear.PNG" alt="WearYou" style="width:100px" class="rounded-pill">
                    </a>
                </div>
                <div>
                    <div class="navbar-nav me-auto mb-1 mb-lg-0">
                        <ul class="navbar-nav me-auto mb-1 mb-lg-0">
                            <div class="box-1">
                                <a href="Accueil.html">
                                    <div class="btn btn-one">
                                        <span>ACCUEIL</span>
                                    </div>
                                </a>
                            </div>
                            <div class="box-1">
                                <a href="vetements.html">
                                    <div class="btn btn-one">
                                        <span>VÊTEMENTS</span>
                                    </div>
                                </a>
                            </div>
                        </ul>

                        <form class="d-flex" role="search">
                            <div class="search-box">
                                <button class="btn-search"><img src="Images/loupe.png" class="loupe"></button>
                                <input type="text" class="input-search" placeholder="Rechercher">
                            </div>
                        </form>

                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="col-6">
                        <a href="cart.php">
                            <img class="nav-link icon" src="Images/trolley.png" aria-current="page" style="width:100px"
                                 alt="cart de shopping">
                        </a>
                    </div>
                    <div class="col-6 account">
                        <a href="Login.php">
                            <img class="nav-link icon" src="Images/account.png" alt="WearYou" aria-current="page">
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<h1 id="titre">Voici le contenu de votre panier :</h1>
<footer>
    <h4 id="bienvenu">Bienvenu(e)s sur WearYou
        <i class="bi bi-emoji-smile"></i>
    </h4>
    <h6>Retrouvez nos réseau sociaux ci-dessous</h6>
    <div><i class="bi bi-twitter"></i> <a href="https://twitter.com/?lang=">Twitter - WearYou</a></div>
    <div><i class="bi bi-instagram"> <a href=https://www.instagram.com/>Instagram - WearYou</a></i></div>
    <div><i class="bi bi-youtube"> <a href=https://www.youtube.com/>Youtube - WearYou</a></i></div>
    <div><i class="bi bi-facebook"> <a href=https://fr-fr.facebook.com/>Facebook - WearYou</a></i></div>
</footer>
</body>
</html>
<?php
?>