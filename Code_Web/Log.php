<?php
/**
 * User: Alessia Mavraj
 * Date: 22.02.2023
 * Time: 15h28
 * Title : Fonction de login pour la création de compte / login
 * Project : Projet_Web
 */

$fichierLog = "stockage des logins.log";//définition du fichier de log
$fileFullPath = setFullPath($fichierLog);//définition du chemin entier jusqu'au fichier
$logHeader = "Temps du log / création\t\t\tNom utilisateur";//affiche les entêtes du fichier


echo setFullPath("stockage des logins.log") . "<br>"; //test pour détection du fichier