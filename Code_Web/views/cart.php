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

    <div id="mainVetements">
    <h1 id="titre">Voici le contenu de votre panier :</h1>


    <?php

    if (isset($_SESSION['email'])) {
        for ($i = 0; $i <= count($objCart) - 1; $i++) {
            if ($objCart[$i]['email'] == $_SESSION['email']) {
                $cartClothes = $objCart[$i]['id'];
                for ($j = 0; $j <= count($obj) - 1; $j++) {
                    if ($obj[$j]['id'] == $cartClothes) {
                        $imagesVetements = $obj[$j]['articleImg'];

                        ?>
                        <div class="vetement">
                            <?php echo '<h1 style="text-align: center"><strong>' . $obj[$j]['articleName'] . '</strong></h1>'; ?>
                            <div id="imageVet">
                                <?php echo "<img style='height: 500px; margin: 5px;' src='../statics/images/Vêtements/$imagesVetements/1.jpg'"; ?>
                            </div>
                            <div>
                                <div id="specsVet">
                                    <?php echo "Taille : " . $obj[$j]['size'] . '<br>'
                                        . "Couleur : " . $obj[$j]['color'] . '<br>'
                                        . "Genre : " . $obj[$j]['gender'] . '<br>'
                                        . "Prix : " . $obj[$j]['price'] . " CHF"; ?>
                                </div>
                                <div id="panierVet">
                                    <div class="box-1 nav-item">
                                        <btn class="nav-item nav-link">
                                            <form method="post">
                                                <input type="hidden" name="id" id="id" value="<?= $j ?>">
                                                <input type='submit' name='takeBack' value='Retirer du panier'/>
                                            </form>
                                        </btn>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        break;
                    }
                }
            }
        }
    }
} else {
    echo "<p style='color: darkgrey; text-align: center; margin-top: 150px; margin-bottom: 150px;'>Oops, il
                semblerait que vous ne soyez pas encore connecté :/</p>";
}

?>

    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>