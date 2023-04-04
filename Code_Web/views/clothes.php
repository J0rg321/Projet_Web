<?php ob_start();
$title = "Vêtements";
?>


<div style="filter: invert(100%)">
    <button style="margin-top: 4.5%; position: fixed;" class="btn-fleche float-end" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvas" role="button">
        <img style="width: 30px; filter: invert(100%)" src="../statics/images/fleche.png">
        <p style="color: black; ">Catégories</p>
    </button>
</div>
<div class="offcanvas offcanvas-start w-25" id="offcanvas">
    <div id="" class="categories">
        <form id="Categories">
            <h2 style="text-align: center"><strong>Catégories</strong></h2>
            <div class="vetementCat">
                <p style="text-align: center"><strong>Vêtement</strong></p>
                <div>
                    <input type="radio" id="casquette" name="categorie" value="casquette">
                    <label for="casquette">Casquette</label>
                </div>
                <div>
                    <input type="radio" id="tshirt" name="categorie" value="tshirt">
                    <label for="tshirt">T-shirt</label>
                </div>
                <div>
                    <input type="radio" id="pantalong" name="categorie" value="pantalong">
                    <label for="Tshirt">Pantalon</label>
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
                    <input class="radioButton" type="radio" id="pull" name="categorie" value="pull">
                    <label for="pull">Pull</label>
                </div>
                <div>
                    <input class="radioButton" type="radio" id="chemise" name="categorie" value="chemise">
                    <label for="chemise">Chemise</label>
                </div>
                <div>
                    <input class="radioButton" type="radio" id="veste" name="categorie" value="veste">
                    <label for="veste">Veste</label>
                </div>
                <div>
                    <input class="radioButton" type="radio" id="combinaison" name="categorie" value="combinaison">
                    <label for="combinaison">Combinaison</label>
                </div>
                <div>
                    <input class="radioButton" type="radio" id="trench" name="categorie" value="trench">
                    <label for="trench">Trench</label>
                </div>
            </div>
            <div class="couleurCat">
                <p><strong>Couleur</strong></p>
                <select name="Couleurs" id="couleur">
                    <option value="blanc">Blanc</option>
                    <option value="noir">Noir</option>
                    <option value="noir">Bleu</option>
                    <option value="noir">Rose</option>
                    <option value="noir">Kaki</option>
                    <option value="noir">Gris</option>
                    <option value="noir">Jaune</option>
                    <option value="noir">Beige</option>
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
                <input type="number" id="prixMax" name="tentacles" min="9.95" max="69.95">
            </div>
            <div class="btnCat">
                <button type="submit" class="boutonCat btn-primary" disabled>Confirmer</button>
                <button type="reset" class="boutonCat btn-primary" disabled>Annuler</button>
            </div>
        </form>
    </div>
</div>


<?php
// chemin d'accès à votre fichier JSON
$file = join(DIRECTORY_SEPARATOR, array(getcwd(), 'statics', 'js', 'data.json'));
//$file = getcwd() . '\statics\js\data.json';
// mettre le contenu du fichier dans une variable
$data = file_get_contents($file);
// décoder le flux JSON
$obj = json_decode($data, true);
// accéder à l'élément approprié

// chemin d'accès à votre fichier JSON
$fileUser = join(DIRECTORY_SEPARATOR, array(getcwd(), 'statics', 'js', 'user.json'));
//$file = getcwd() . '\statics\js\data.json';
// mettre le contenu du fichier dans une variable
$dataUser = file_get_contents($fileUser);
// décoder le flux JSON
$objUser = json_decode($dataUser, true);
// accéder à l'élément approprié


// chemin d'accès à votre fichier JSON
$fileCart = join(DIRECTORY_SEPARATOR, array(getcwd(), 'statics', 'js', 'cart_content.json'));
//$file = getcwd() . '\statics\js\cart_content.json';
// mettre le contenu du fichier dans une variable
$dataCart = file_get_contents($fileCart);
// décoder le flux JSON
$objCart = json_decode($dataCart, true);
// accéder à l'élément approprié


if (isset($_POST['cart'])) {                //Si le bouton d'ajout au panier est appuié...
    if (isset($_SESSION['email'])) {                //Et que l'utilisateur est connecté...
        for ($i = 0; $i <= count($objCart) - 1; $i++) {
            if ($objCart[$i]['email'] == $_SESSION['email']) {
                $newCartData = $objCart;                        //Les informations précédentes seront reinscrites
                $newCartData[$i]['cloth_' . $_POST['id'] + 1] = $_POST['id'] + 1;       //Une nouvelle variable se crée en indiquant qu'un vetement est dans le panier

                file_put_contents($fileCart, json_encode($newCartData));        //Donner l'empllacement du Json et Ajouter toutes les données
            }
        }
    } else {            //Si l'utilisateur n'est pas connecté...
        echo "<p style='color: red;'>Vous n'ettes pas encore connecté !!!</p>";     //Affiche le message suivant...
    }
}


?>

<div class="mainVetements"><?php

    for ($i = 0; $i <= count($obj) - 1; $i++) {  //affiche les différentes données dans l'ordre donné dans le fichier...
    $imagesVetements = $obj[$i]['articleImg']; ?>
    <div class="vetement">
        <?php echo '<h1 style="text-align: center"><strong>' . $obj[$i]['articleName'] . '</strong></h1>'; ?>
        <div id="imageVet">
            <?php echo "<img style='height: 500px; margin: 5px;' src='../statics/images/Vêtements/$imagesVetements/1.jpg'"; ?>
        </div>
        <div>
            <div id="specsVet">
                <?php echo "Taille : " . $obj[$i]['size'] . '<br>'      //Taille de l'article
                    . "Couleur : " . $obj[$i]['color'] . '<br>'         //Couleur de l'article
                    . "Genre : " . $obj[$i]['gender'] . '<br>'          //Genre de l'article
                    . "Prix : " . $obj[$i]['price'] . " CHF";           //Prix de l'article
                ?>
            </div>
            <div id="panierVet">
                <div class="box-1 nav-item">
                    <btn class="nav-item nav-link">
                        <form method="post">
                            <input type="hidden" name="id" id="id" value="<?= $i ?>">
                            <button type='submit' name='cart' value='cart' style=" position: absolute; border: none; background-color: transparent;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                                     class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
                                    <path d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5ZM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1Zm0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                                </svg>
                            </button>
                        </form>
                    </btn>
                </div>
            </div>
        </div>
    </div>
</div>


<?php }
$content = ob_get_clean();
require "gabarit.php";      //appel du gabarit contenant la NavBar et le Footer
?>
