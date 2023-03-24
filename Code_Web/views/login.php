<?php
ob_start(); ?>
    <div class="main">
	  <?php $arrow = '';
	  $title = "Login";
	  $error = false;
	  if (isset($_POST) && isset($_POST['email']) && isset($_POST['password'])) {

// chemin d'accès à votre fichier JSON
		$file = getcwd() . '\statics\js\user.json';
// mettre le contenu du fichier dans une variable
		$data = file_get_contents($file);
// décoder le flux JSON
		$obj = json_decode($data, true);
// accéder à l'élément approprié

		if (!empty($obj)) {
		  for ($i = 0; $i <= count($obj) - 1; $i++) {
			if (isset($obj[$i]['email']) && isset($obj[$i]['password']) && $obj[$i]['email'] == $_POST['email'] && $obj[$i]['password'] == $_POST['password']) {
			  //User exists,
			  header('location: /index.php/?action=clothes');
			  $_SESSION['nom'] = $obj[$i]['nom'];
			  $_SESSION['email'] = $obj[$i]['email'];
			  $_SESSION['email'] = $obj[$i]['password'];
			  exit;
			} else {
			  $error = true;
			}
		  }
		}
	  }


	  ?>
        <div style="color: black;" class="div_centre">
            <h1>Veuillez vous logger : </h1>
            <form action="/index.php/?action=login" method="post">
                <div class="formLogin" style="border:3px solid white" margin="5px">
				  <?php if ($error) {
					echo '<p>Votre compte n\'existe pas !!!</p>';
				  } ?>
                    <div id="mail">
                        E-mail : <input type="email" name="email" placeholder="e-mail" required/>
                    </div>
                    <div id="mdp">
                        Mot de passe : <input type="password" id="password" name="password" placeholder="mot de passe"/>
                    </div>
                    <div id="btn">
                        <button type="submit" class="btn-primary">Envoyer</button>
                    </div>
                    <h5><a href="create.php">Créer un compte</a></h5>

                </div>
            </form>
        </div>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>