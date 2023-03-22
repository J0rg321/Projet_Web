<?php
ob_start();
$categories = '</div>';
$arrow = '';
$title="Accueil";
$nomDeBienvenue = 'Bienvenue à toi' .$_POST;
?>

<p></p>
<?php
$content = ob_get_clean();
require 'gabarit.php'; //appel du gabarit contenant le code pour l'accueil
