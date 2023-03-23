<?php
ob_start();
$title="Accueil";
//$categories='</div>';
echo '<p class="bienvenue">Bienvenue ' .$_SESSION['nom'] .' !!</p>';
?>


<p></p>
<?php
$content = ob_get_clean();
require 'gabarit.php'; //appel du gabarit contenant le code pour l'accueil
