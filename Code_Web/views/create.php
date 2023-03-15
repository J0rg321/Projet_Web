<?php
ob_start();
$title = "Creation de compte";
$categories = '';


?>
    <div class="div_centre">
        <h1>Veuillez créer votre compte : </h1>
        <form action='user.json' method='post'>
            <div class="form-group">
                <label for="pseudo">Pseudo*</label>
                <input type="text" name='pseudo' id="pseudo" aria-describedby="pseudoHelp" placeholder="Votre pseudo"
                       class="form-control" required>
            </div>
            <div class="form-group">
                <label for="userName">Nom d'utilisateur*</label>
                <input type="text" name="username" id="userName" aria-describedby="userNameHelp"
                       placeholder="Votre nom d'utilisateur"
                       class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputEmail">Adresse-mail*</label>
                <input type="email" name="mail" id="inputEmail" aria-describedby="emailHelp"
                       placeholder="Votre adresse mail"
                       class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Mot de passe*</label>
                <input type="password" name="mdp" id="inputPassword" placeholder="Votre mot de passe"
                       class="form-control"
                       minlength="14" maxlength="16" autocomplete="new-password" required>
            </div>
            <div id="envoi">
                <button type="submit" class="btn green" name="envoi">Envoyer</button>
            </div>
            <div id="reini">
                <button type="reset" class="btn green">Réinitialiser</button>
            </div>
    </div>

<?php
if (isset($_POST['envoi'])) {
    echo 'Bonjour' . $_POST['pseudo'];
    echo 'Voici vos données : ';
    echo data();
}
if(isset($_GET['erreur'])){
    $err = $_GET['erreur'];
    if($err==1 || $err==2)
        echo "<p style='color:red'>Utilisateur et/ou mot de passe incorrect</p>";
}
$content = ob_get_clean();
require "gabarit.php";
?>