<?php
ob_start();
$categories = '';
$arrow = '';
$title="Panier";
?>
<h1 id="titre">Voici le contenu de votre panier :</h1>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>