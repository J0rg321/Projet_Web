<?php ob_start();
$title = "Vêtements";
?>


<div class="col min-vh-100 p-4">
    <button class="btn-fleche float-end" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
        <img style="width: 30px" src="../statics/images/fleche.png">
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
<div class="main" style="position: static; margin-left :10%; margin-right :10%; ">

    <div style="border:solid; height: 10cm; width: 100%;">

    </div>
    <div style="border:solid; color: grey; height: 10cm; width: 100%;">
	  <?php


	  // chemin d'accès à votre fichier JSON
	  $file = 'data.json';
	  // mettre le contenu du fichier dans une variable
	  $data = file_get_contents($file);
	  // décoder le flux JSON
	  $obj = json_decode($data, true);
	  // accéder à l'élément approprié


	  for ($i = 1; $i <= 10; $i++) {
		$imagesVetements = 'Casquette_noire';
?>
          <img src="../statics/images/Vêtements/<?php $imagesVetements ?>/1.jpg ">

        <?php
		echo "<img src='../statics/images/Vêtements/<?php $imagesVetements ?>/1.jpg'";
		echo $obj[$i]['articleName'].'<br>'."taille : ".$obj[$i]['size'].'<br>'."Couleur : ".$obj[$i]['color'].'<br>'."Genre : ".$obj[$i]['gender'].'<br>'."Prix : ".$obj[$i]['price']. " CHF";
	  }

	  ?>
    </div>
    <div style="border:solid; height: 10cm; width: 100%;"></div>

</div>


<?php
$categories = ob_get_clean();
require "gabarit.php";
?>
