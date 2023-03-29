<?php ob_start();
$title = "Vêtements";
?>


<div style="filter: invert(100%)">
    <button style="margin-top: 4.5%; positionh: fixed;" class="btn-fleche float-end" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvas" role="button">
        <img style="width: 30px; filter: invert(100%)" src="../statics/images/fleche.png">
        <p style="color: black; ">Catégories</p>
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


<?php
// chemin d'accès à votre fichier JSON
$file = join(DIRECTORY_SEPARATOR, array(getcwd(),'statics', 'js', 'data.json'));

//$file = getcwd() . '\statics\js\data.json';
// mettre le contenu du fichier dans une variable
$data = file_get_contents($file);
// décoder le flux JSON
$obj = json_decode($data, true);
// accéder à l'élément approprié
?>
<div class="mainVetements" style="background-color: black;"><?php
  for ($i = 0;
  $i <= count($obj) - 1;
  $i++) {
  $imagesVetements = $obj[$i]['articleImg'];
  ?>
    <div class="vetement">
	  <?php echo '<h1 style="text-align: center"><strong>' . $obj[$i]['articleName'] . '</strong></h1>'; ?>
        <div id="imageVet">
		  <?php echo "<img style='height: 500px; margin: 5px;' src='../statics/images/Vêtements/$imagesVetements/1.jpg'"; ?>
        </div>
        <div>
            <div id="specsVet">
			  <?php echo "Taille : " . $obj[$i]['size'] . '<br>' . "Couleur : " . $obj[$i]['color'] . '<br>' . "Genre : " . $obj[$i]['gender'] . '<br>' . "Prix : " . $obj[$i]['price'] . " CHF"; ?>
            </div>
            <div id="panierVet">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor"
                     class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
                    <path d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5ZM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1Zm0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                </svg>
            </div>
        </div>
    </div>
</div>
<?php } ?>



<?php
$content = ob_get_clean();
require "gabarit.php";
?>
