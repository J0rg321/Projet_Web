

<?php
session_start();
if (isset($_SESSION['username']))
{
    session_destroy();
    echo 'blalb';
    unset($_SESSION['username']);
}
header("location:index.php");
?>
echo 'Vous avez été déconnecté(e). <a href="login.php">Reloger vous ici</a>';


