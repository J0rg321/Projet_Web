<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vêtement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Try.css">
</head>
<body>
<div style="position: fixed; background-color: transparent; width: 100%">
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
                                    <a href="vetements.php">
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
                            <a href="Cart.html">
                                <img class="nav-link icon" src="Images/trolley.png" aria-current="page"
                                     style="width:100px">
                            </a>
                        </div>
                        <div class="col-6 account">
                            <a href="Login.html">
                                <img class="nav-link icon" src="Images/account.png" alt="WearYou"
                                     aria-current="page">
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="col min-vh-100 p-4">
        <button class="btn-fleche float-end" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
            <img style="width: 30px" src="Images/fleche.png">
            <p style="color: white; ">Catégories</p>
        </button>
    </div>
</div>
<div class="offcanvas offcanvas-start w-25" id="offcanvas">
    <div id="" class="categories">
        <form id="Categories">
            <h2 style="text-align: center"><strong>Catégories</strong></h2>
            <div class="vetementCat">
                <p style="text-align: center"><strong>Vêtement</strong></p>
                <div>
                    <input type="radio" id="tshirt" name="categorie" value="tshirt">
                    <label for="tshirt">T-shirt</label>
                </div>
                <div>
                    <input type="radio" id="pantalong" name="categorie" value="pantalong">
                    <label for="Tshirt">Pantalong</label>
                </div>
                <div>
                    <input type="radio" id="robe" name="categorie" value="robe">
                    <label for="robe">Robe</label>
                </div>
                <div>
                    <input type="radio" id="jupe" name="categorie" value="jupe">
                    <label for="jupe">Jupe</label>
                </div>
                <div>
                    <input class="radioButton" type="radio" id="chemise" name="categorie" value="chemise">
                    <label for="chemise">Chemise</label>
                </div>
            </div>
            <div class="couleurCat">
                <p><strong>Couleur</strong></p>
                <select name="Couleurs" id="couleur">
                    <option value="rouge">Rouge</option>
                    <option value="vert">Vert</option>
                    <option value="blanc">Blanc</option>
                    <option value="noir">Noir</option>
                    <option value="violet">Violet</option>
                </select>
            </div>
            <div class="tailleCat">
                <p><strong>Taille</strong></p>
                <select name="tailles" id="taille">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
            </div>
            <div class="prixCat">
                <p><strong>Prix min.</strong></p>
                <input type="number" id="prixMax" name="tentacles" min="10" max="100">
            </div>
            <div class="btnCat">
                <button type="submit" class="boutonCat btn-primary">Confirmer</button>
                <button type="reset" class="boutonCat btn-primary">Annuler</button>
            </div>
        </form>
    </div>
</div>
<div class="mainVetements">
    <div class="marginVetements">
        <div class="vetements">
            <img src="Images/Vêtements/Jupe_jean/Jupe%201.jpg">
            <p>Prix : <?php ?></p>
            <p>Prix : <?php ?></p>
            <p>Prix : <?php ?></p>
            <p>Prix : <?php ?></p>
        </div>
        <div class="vetements">
            <img src="Images/Vêtements/Jupe_jean/Jupe%201.jpg">
            <p>Prix : <?php ?></p>
            <p>Prix : <?php ?></p>
            <p>Prix : <?php ?></p>
            <p>Prix : <?php ?></p>
        </div>
        <div class="vetements">
            <img src="Images/Vêtements/Jupe_jean/Jupe%201.jpg">
            <p>Prix : <?php ?></p>
            <p>Prix : <?php ?></p>
            <p>Prix : <?php ?></p>
            <p>Prix : <?php ?></p>
        </div>
        <div class="vetements">
            <img src="Images/Vêtements/Jupe_jean/Jupe%201.jpg">
            <p>Prix : <?php ?></p>
            <p>Prix : <?php ?></p>
            <p>Prix : <?php ?></p>
            <p>Prix : <?php ?></p>
        </div>
    </div>

</div>
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