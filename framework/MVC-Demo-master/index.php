<?php

 /**********************************************************************************************\
 *                                                                                              *
 * L'index ici ne sert qu'a redirigé vers le contrôleur 'displayUser.php'.                      *
 * Le contrôleur 'displayUser.php' verifie l'URL (valeurs après le '?' style index.php?valeur). *
 * La/les valeur(s) lui indique quel modèle (requète) éxecuter                                  *
 * Et aussi dans quel vue afficher le résultat de tout ça                                       *
 *                                                                                              *
 * Allez jeter un oeil sur '/controllers/displayUsers.php'                                      *
 *                                                                                              *
 \**********************************************************************************************/

//On charge le fichier config qui contient nos infos de connexion MySQL et
require('config.php');

//Charge le header
include ('views/headers/defaut.php');

$url =''; //Juste définit pour éviter l'erreur !

switch ($url) { //switch fonctionne comme if du style if case = 1 do something
    case  (!isset($_GET['set'])): //Action si "set" est definit dans l'URL ($_GET)
        include ('views/setUserView.php'); //Charge la "vue" (html) correspondante
        break;
    case  (!isset($_GET['get'])): //Lecture si "get"
        include ('views/getUserView.php');
        break;
    default: //Definit l'action par défaut si rien n'est spécifié dans l'URL (index.php)
        include ('views/listUsersView.php'); //Charge la liste (par défaut)
}

//Charge le footer
include ('views/footers/defaut.php');


/* Ancien index.php 

include ('config.php');

$default = ''; //Vue par défaut essayez avec 'list', 'get' ou 'set'

if ($default == null) { //Si la vue par défaut n'est pas définie alors on dit au contrôleur d'agir comme si il recevait 'list'
    header('Location:/'.$project_name.'/controllers/displayUsers.php?list');
} else { //Sinon on lui envoi $defaut
    header('Location:/'.$project_name.'/controllers/displayUsers.php?' . $default);
}
*/
