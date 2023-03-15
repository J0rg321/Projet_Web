<?php
ob_start();
$categories = '</div>';
$arrow = '';
$title="Accueil";
?>

<p>Teste</p>
<?php
$content = ob_get_clean();
require 'gabarit.php'; //appel du gabarit contenant le code pour l'accueil
?>