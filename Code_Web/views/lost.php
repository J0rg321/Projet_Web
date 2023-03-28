<?php
ob_start();
$categories = '';
$arrow = '';
$title = "Lost X(";
?>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>