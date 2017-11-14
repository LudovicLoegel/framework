<?php

$bdd=mysqli_connect("127.0.0.1","ludovic","glados","monyck");

mysqli_set_charset($bdd,"utf8");

if(!$bdd) {
   echo "erreur de connection" .PHP_EOL;
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
