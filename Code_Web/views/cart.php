<?php
ob_start();
$categories = '';
$arrow = '';
$title = "Panier";

if (isset($_SESSION['email'])) {
//Cart file...
    // chemin d'accès à votre fichier JSON
    $fileCart = join(DIRECTORY_SEPARATOR, array(getcwd(), 'statics', 'js', 'cart_content.json'));
    // mettre le contenu du fichier dans une variable
    $dataCart = file_get_contents($fileCart);
    // décoder le flux JSON
    $objCart = json_decode($dataCart, true);
    // accéder à l'élément approprié

    //Data file...
    // chemin d'accès à votre fichier JSON
    $file = join(DIRECTORY_SEPARATOR, array(getcwd(), 'statics', 'js', 'data.json'));
    // mettre le contenu du fichier dans une variable
    $data = file_get_contents($file);
    // décoder le flux JSON
    $obj = json_decode($data, true);
    // accéder à l'élément approprié

    //User file...
    // chemin d'accès à votre fichier JSON
    $fileUser = join(DIRECTORY_SEPARATOR, array(getcwd(), 'statics', 'js', 'user.json'));
    // mettre le contenu du fichier dans une variable
    $dataUser = file_get_contents($fileUser);
    // décoder le flux JSON
    $objUser = json_decode($dataUser, true);
    // accéder à l'élément approprié


    ?>
    <h1 id="titre">Voici le contenu de votre panier :</h1>

    <div class="mainVetements">


    <?php

    if (isset($_POST['remove'])) {
        for ($j = 0; $j <= count($objCart); $j++) {
            if ($_SESSION['email'] == $objCart[$j]['email']) {
                $takeBack = $_POST['takeBack']+ 1;
                $objCart[$j]['cloth_' . $takeBack] = null;

                file_put_contents($fileCart, json_encode($objCart));
            }
        }
    }


    for ($i = 0; $i <= count($objCart) - 1; $i++) {
        if ($objCart[$i]['email'] == $_SESSION['email']) {
            $clothesCount = count($obj);
            while ($clothesCount != 0) {
                if (isset($objCart[$i]['cloth_' . $clothesCount])) {
                    $objClothes = $clothesCount - 1;
                    $imagesVetements = $obj[$objClothes]['articleImg'];

                    ?>
                    <div class="vetement">
                        <?php echo '<h1 style="text-align: center"><strong>' . $obj[$objClothes]['articleName'] . '</strong></h1>'; ?>
                        <div id="imageVet">
                            <?php echo "<img style='height: 500px; margin: 5px;' src='../statics/images/Vêtements/$imagesVetements/1.jpg'"; ?>
                        </div>
                        <div>
                            <div id="specsVet">
                                <?php echo "Taille : " . $obj[$objClothes]['size'] . '<br>'
                                    . "Couleur : " . $obj[$objClothes]['color'] . '<br>'
                                    . "Genre : " . $obj[$objClothes]['gender'] . '<br>'
                                    . "Prix : " . $obj[$objClothes]['price'] . " CHF"; ?>
                            </div>
                            <div id="panierVet">
                                <div class="box-1 nav-item">
                                    <btn class="nav-item nav-link">
                                        <form method="post">
                                            <input type="hidden" name="takeBack" id="takeBack"
                                                   value="<?= $objClothes ?>">
                                            <input type='submit' name='remove' value='Remove'/>
                                        </form>
                                    </btn>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                <?php }
                $clothesCount--;
            }
        }
    }
} else {
    echo "<p style='color: darkgrey; text-align: center; margin-top: 150px; margin-bottom: 150px;'>Oops, il semblerait que vous ne soyez pas encore connecté :/</p>";
}
echo "</div>";
?>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>