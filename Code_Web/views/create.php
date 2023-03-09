<?php
ob_start();
$title = "Creation de compte";
$categories = '';
?>
    <div class="div_centre">
        <h1>Veuillez créer votre compte : </h1>
        <form action="C:\GitHub\Projet_Web\Code_Web\statics\js\user.json" method="post">
            <div class="form-group">
                <label for="pseudo">Pseudo*</label>
                <input type="text" id="pseudo" aria-describedby="pseudoHelp" placeholder="Votre pseudo"
                       class="form-control" required>
            </div>
            <div class="form-group">
                <label for="userName">Nom d'utilisateur*</label>
                <input type="text" id="userName" aria-describedby="userNameHelp" placeholder="Votre nom d'utilisateur"
                       class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputEmail">Adresse-mail*</label>
                <input type="email" id="inputEmail" aria-describedby="emailHelp" placeholder="Votre adresse mail"
                       class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Mot de passe*</label>
                <input type="password" id="inputPassword" placeholder="Votre mot de passe" class="form-control"
                       required>
            </div>
            <div id="envoi">
                <button type="submit" class="btn green">Envoyer</button>
            </div>
            <div id="reini">
                <button type="reset" class="btn green">Réinitialiser</button>
            </div>

        </form>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>