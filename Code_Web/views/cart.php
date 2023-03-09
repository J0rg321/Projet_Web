<?php
ob_start();
$categories = '';
$arrow = '';
$title="Panier";
?>
<div id="container"
<h1 id="titre">Voici le contenu de votre panier :</h1>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>