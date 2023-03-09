<?php
ob_start();
$categories = '</div>';
$arrow = '';
$title="Login";
?>
    <div class="div_centre">
        <h1>Veuillez vous logger : </h1>
        <form action="Log.php" method="post">
            <div class="formLogin" style="border:3px solid white" margin="5px">
                <div id="mail">
                    E-mail : <input type="email" name="email" placeholder="e-mail" required/>
                </div>
                <div id="mdp">
                    Mot de passe : <input type="password" id="password" name="mdp" placeholder="mot de passe"/>
                    <div id="btn">
                        <button type="submit" class="btn-primary">Envoyer</button>
                        <button type="reset" class="btn-primary">Réinitialiser</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>