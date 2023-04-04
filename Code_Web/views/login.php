<?php
ob_start(); ?>
    <div class="main">
<?php $arrow = '';
$title = "Login";
$error = false;
if (isset($_POST) && isset($_POST['email']) && isset($_POST['password'])) {

// chemin d'accès à votre fichier JSON
    $file = join(DIRECTORY_SEPARATOR, array(getcwd(), 'statics', 'js', 'user.json'));
// mettre le contenu du fichier dans une variable
    $data = file_get_contents($file);
// décoder le flux JSON
    $obj = json_decode($data, true);
// accéder à l'élément approprié

    if (!empty($obj)) {
        for ($i = 0; $i <= count($obj) - 1; $i++) {
            if (isset($obj[$i]['email']) && isset($obj[$i]['password'])
                && strtolower($obj[$i]['email']) == strtolower($_POST['email'])
                && password_verify($_POST['password'], $obj[$i]['password'])) {
                //User exists,
                header('location: /index.php/?action=home');
                $_SESSION['username'] = $obj[$i]['username'];
                $_SESSION['email'] = strtolower($obj[$i]['email']);
                exit;
            } else {
                $error = true;
            }
        }
    }
}
if (!isset($_SESSION['username'])) {
    ?>
    <div style="color: black;" class="div_centre">
        <h1>Veuillez vous logger : </h1>
        <form action="/index.php/?action=login" method="post">
            <div class="formLogin">
                <?php if ($error) {
                    echo '<p style="color: #ff0000"><strong>Ces informations ne nous disent rien.</strong></p>';
                } ?>
                <div>
                    E-mail : <input type="email" name="email" placeholder="e-mail" required/>
                </div>
                <div>
                    Mot de passe : <input type="password" id="password" name="password" placeholder="mot de passe"
                                          required/>
                </div>
                <div id="btn-login">
                    <button type="submit" class="fv">Envoyer</button>
                </div>
                <h5><a href="index.php?action=create">Créer un compte</a></h5>
            </div>
        </form>
    </div>
    </div>
<?php }
if (isset($_SESSION['username'])) { ?>
    <form method="post" class="fv" action="index.php?action=logout" style="text-align: center; border-top: 50px;">
        <input type="submit" value="LogOut">
    </form>
    </div>
    <?php
}
$content = ob_get_clean();
require "gabarit.php";
?>