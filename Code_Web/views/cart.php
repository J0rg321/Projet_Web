<?php
ob_start();
$categories = '';
$arrow = '';
$title = "Panier";

if (isset($_POST) && isset($_POST['email']) && isset($_POST['password'])) {
//Cart file...
  // chemin d'accès à votre fichier JSON
  $fileCart = getcwd() . '\statics\js\cart_content.json';
  // mettre le contenu du fichier dans une variable
  $dataCart = file_get_contents($fileCart);
  // décoder le flux JSON
  $objCart = json_decode($dataCart, true);
  // accéder à l'élément approprié

  //Data file...
  // chemin d'accès à votre fichier JSON
  $file = getcwd() . '\statics\js\data.json';
  // mettre le contenu du fichier dans une variable
  $data = file_get_contents($fileCart);
  // décoder le flux JSON
  $obj = json_decode($dataCart, true);
  // accéder à l'élément approprié

  //User file...
  // chemin d'accès à votre fichier JSON
  $fileUser = getcwd() . '\statics\js\user.json';
  // mettre le contenu du fichier dans une variable
  $dataUser = file_get_contents($fileUser);
  // décoder le flux JSON
  $objUser = json_decode($dataUser, true);
  // accéder à l'élément approprié




/*  ...require();
  f
  f
  fd
  fgd
  fgd
  f
  f
  sg
  dhrhrtehrt6*/
}

?>

<main>
    <h1 id="titre">Voici le contenu de votre panier :</h1>

</main>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>