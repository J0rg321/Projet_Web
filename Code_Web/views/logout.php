

<?php
session_start();
if (isset($_SESSION['username']))
{
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);
}
header("location:index.php");
echo 'Vous avez été déconnecté(e). <a href="login.php">Veuillez vous logger à nouveau ici</a>';
?>



