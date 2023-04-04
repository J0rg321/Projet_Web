<?php
ob_start();
$title = "Page perdue.
";
?>
    <div class="mainLost">
        <h1><a href="index.php?action=home"></a>Vous êtes perdu(e), retournez sur la page d'accueil : <a href="home.php">Ici</a></h1>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";      //appel du gabarit contenant la NavBar et le Footer
?>