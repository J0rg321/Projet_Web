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
<div style="position: fixed; background-color: transparent; width: 100%; height: 100%; padding-bottom: 5cm;">
    <div id="container">
        <div div="row">
            <nav class="navbar navbar-expand-lg bg-brown">
                <div class="container-fluid d-flex justify-content-between">
                    <div>
                        <a class="logo" href="../index.php/?action=home">
                            <img src="../statics/images/logo.PNG" alt="WearYou" style="width:100px"
                                 class="rounded-pill">
                        </>
                    </div>
                    <div>
                        <div class="navbar-nav me-auto mb-1 mb-lg-0">
                            <ul class="navbar-nav me-auto mb-1 mb-lg-0">
                                <div class="box-1">
                                    <a href="../index.php/?action=home">
                                        <div class="btn btn-one">
                                            <span>ACCUEIL</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="box-1">
                                    <a href="../index.php/?action=clothes">
                                        <div class="btn btn-one">
                                            <span>VÊTEMENTS</span>
                                        </div>
                                    </a>
                                </div>
                            </ul>

                            <form class="d-flex" role="search">
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
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="col-6">
                            <a href="../index.php/?action=cart">
                                <img class="nav-link icon" src="../statics/images/trolley.png" aria-current="page"
                                     style="width:100px">
                            </a>
                        </div>
                        <div class="col-6 account">
                            <a href="../index.php/?action=login">
                                <img class="nav-link icon" src="../statics/images/account.png" alt="WearYou"
                                     aria-current="page">
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
  <?= $content; ?>


</body>
<footer>
    <h4 id="bienvenu">Bienvenu(e)s sur WearYou
        <i class="bi bi-emoji-smile"></i>
    </h4>
    <div style="position: static; margin-left: 31%; margin-right: 31%;">
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
