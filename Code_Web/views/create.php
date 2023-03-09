<?php
ob_start();
$title = "Creation de compte";
$categories = '';
?>
    <div class="div_centre">
        <h1>Veuillez vous logger : </h1>
        <form action="create_data.php" method="post">
            <div class="form-group">
                <label for="pseudo">Pseudo *</label>
                <input type="text" id="pseudo" aria-describedby="pseudoHelp" placeholder="Enter pseudo"
                       class="form-control" required>
            </div>
            <div class="form-group">
                <label for="userName">User Name *</label>
                <input type="text" id="userName" aria-describedby="userNameHelp" placeholder="Enter user name"
                       class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email address *</label>
                <input type="email" id="inputEmail" aria-describedby="emailHelp" placeholder="firstname@domain.ch"
                       class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password *</label>
                <input type="password" id="inputPassword" placeholder="Password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>