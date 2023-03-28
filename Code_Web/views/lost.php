<?php
ob_start();
$categories = '';
$arrow = '';
$title = "Lost X(";
?>
    <div class="mainLost" style="text-align: center">
        <h1>Vous êtes perdu(e) 😐</h1>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>