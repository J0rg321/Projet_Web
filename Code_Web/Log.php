<?php
/**
 * User: Alessia Mavraj
 * Date: 22.02.2023
 * Time: 15h28
 * Title : Fonction de login pour la création de compte / login
 * Project : Projet_Web
 */


// Vérifier si le formulaire est soumis
if (isset($_POST['submit'])) {
    /* récupérer les données du formulaire en utilisant
       la valeur des attributs name comme clé
      */
    $nom = $_POST['nom'];
    $age = $_POST['age'];
    $adresse = $_POST['adresse'];
    // afficher le résultat
    echo '<h3>Informations récupérées en utilisant la méthode POST</h3>';
    echo 'Nom : ' . $nom . ' Age : ' . $age . ' Adresse : ' . $adresse;
    exit;
}
