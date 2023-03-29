<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../statics/styles/style.css">

</head>
<body>
<div id="container navbar navbar-expand-lg" style="border-bottom: solid white;">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid justify-content-between">
            <div class="navbar-brand">
                <a class="logo" href="../index.php/?action=home">
                    <img src="../statics/images/logo.PNG" alt="WearYou" style="width:100px" ;>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list"
                     viewBox="0 0 16 16" style="filter: invert(100%)">
                    <path fill-rule="evenodd"
                          d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-left: auto; margin-right: auto; position: static !inm">
                <div class="navbar-nav me-auto mb-1 mb-lg-0">
                    <ul class="navbar-nav">
                        <div class="box-1 nav-item nav-link">
                            <a href="../index.php/?action=home">
                                <div class="btn btn-one">
                                    <span>ACCUEIL</span>
                                </div>
                            </a>
                        </div>
                        <div class="box-1 nav-item nav-link">
                            <a href="../index.php/?action=clothes">
                                <div class="btn btn-one">
                                    <span>VÊTEMENTS</span>
                                </div>
                            </a>
                        </div>
                    </ul>
                    <form class="d-flex nav-item nav-link" role="search">
                        <div class="search-box">
                            <button class="btn-search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                     fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                            <input type="text" class="input-search" placeholder="Rechercher">
                        </div>
                    </form>
                </div>

                <div>
                    <div style="float:left;" class="nav-item nav-link">
                        <a href="../index.php/?action=cart">
                            <img class="nav-link icon" src="../statics/images/trolley.png" aria-current="page"
                                 style="width:100px">
                        </a>
                    </div>
                    <div style="float:left;" class="nav-item nav-link">
                        <a href="../index.php/?action=login">
                            <img class="nav-link icon" src="../statics/images/account.png" alt="WearYou"
                                 aria-current="page">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<?= $content; ?>


</body>
<footer>
    <h4>Bienvenu(e)s sur WearYou
        <i class="bi bi-emoji-smile"></i>
    </h4>
    <div>
        <h6>Retrouvez nos réseau sociaux ci-dessous</h6>
        <div class="reseauxSociaux"><i class="bi bi-twitter"></i> <a href="https://twitter.com/?lang=">Twitter -
                WearYou</a></div>
        <div class="reseauxSociaux"><i class="bi bi-instagram"></i> <a href=https://www.instagram.com/>Instagram -
                WearYou</a></i></div>
        <div class="reseauxSociaux"><i class="bi bi-youtube"></i> <a href=https://www.youtube.com/>Youtube -
                WearYou</a></i></div>
        <div class="reseauxSociaux"><i class="bi bi-facebook"></i> <a href=https://fr-fr.facebook.com/>Facebook -
                WearYou</a></i></div>
    </div>
</footer>

</html>

<?php
