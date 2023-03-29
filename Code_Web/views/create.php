<?php
ob_start();
$title = "Creation de compte";
$error = false;
if (isset($_POST) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username'])) {
// chemin d'accès à votre fichier JSON
    $file = getcwd() . '\statics\js\user.json';
// mettre le contenu du fichier dans une variable
    $data = file_get_contents($file);
// décoder le flux JSON
    $obj = json_decode($data, true);
// accéder à l'élément approprié
    print_r($obj);
    if (!empty($obj)) {
        for ($i = 0; $i <= count($obj) - 1; $i++) {
            if (isset($obj[$i]['email']) && $obj[$i]['email'] == $_POST['email']) {
                $error = true;
            }
        }
        if (!$error) {

<<<<<<< HEAD
    /* AJOUTER PARTIE PANIER !!!!!!!!!!!!!*/
	  $newData["username"] = $_POST['username'];
	  $newData["email"] = $_POST['email'];
	  $newData["password"] = password_hash($_POST['password'], PASSWORD_DEFAULT);
	  $obj[] = $newData;
	  file_put_contents($file, json_encode($obj));
	  //User created,
	  header('location: /index.php/?action=home');
	  $_SESSION['username'] = $obj[$i]['username'];
	  $_SESSION['email'] = $obj[$i]['email'];
	  exit;
=======

            $newData["username"] = $_POST['username'];
            $newData["email"] = $_POST['email'];
            $newData["password"] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $obj[] = $newData;
            file_put_contents($file, json_encode($obj));
            //User created,
            header('location: /index.php/?action=home');
            $_SESSION['username'] = $obj[$i]['username'];
            $_SESSION['email'] = $obj[$i]['email'];
            exit;
>>>>>>> 9848afad3e534889a8fdb1aa76810fc0d3c7c311

        }
    }
}
?>
    <div class="main">
        <div class="div_centre">
            <h1>Veuillez créer votre compte : </h1>
            <form action="/index.php/?action=create" method="post">
                <?php if ($error) {
                    echo '<p>Ce compte est déjà existant ! Veuillez vous <a href="index.php?action=login">logger</a></p>';
                } ?>
                <div class="formLogin">
                    <div>
                        <label for="userName">Nom d'utilisateur*</label>
                        <input type="text" name="username" id="userName" aria-describedby="userNameHelp"
                               placeholder="Votre nom d'utilisateur"
                               required>
                    </div>
                    <div>
                        <label for="inputEmail">Adresse-mail*</label>
                        <input type="email" name="email" id="inputEmail" aria-describedby="emailHelp"
                               placeholder="Votre adresse mail"
                               required>
                    </div>
                    <div>
                        <label for="inputPassword">Mot de passe*</label>
                        <input type="password" name="password" id="inputPassword" placeholder="Votre mot de passe"
                               minlength="8" required>
                    </div>
                    <div id="envoi">
                        <button type="submit" name="envoi">Envoyer</button>
                    </div>
                </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>