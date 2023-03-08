<?php
ob_start();
$title="Creation de compte";
?>
    <div class="div_centre">
        <h1>Bonjour, veuillez créer votre compte : </h1>
        <form action=".json" method="post">
            <div class="formLogin" style="border:3px solid white" margin="5px">
                <div id="mail">
                    E-mail : <input type="email" name="email" placeholder="e-mail" required/>
                </div>
                <div id="mdp">
                    Mot de passe : <input type="password" id="password" name="mdp" placeholder="mot de passe"/>
                    <button type="submit" class="btn-primary">Envoyer</button>
                    <button type="reset" class="btn-primary">Réinitialiser</button>
                </div>
        </form>
    </div>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>