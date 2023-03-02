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
<footer>
    <a>Ici il y a aura un footer plein</a>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </svg>
</footer>
</body>
</html>
<?php
?>