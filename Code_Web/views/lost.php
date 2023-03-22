<?php
ob_start();
$categories = '';
$arrow = '';
$title = "Lost X(";
?>
<div class="lds-heart"><div></div></div>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>