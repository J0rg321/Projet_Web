

<?php
session_start();
if (isset($_SESSION['username']))       //Si l'utilisateur est connecté
{
    session_destroy();                  //Supprimer les differentes information de la session.
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);
}
exit;
?>



