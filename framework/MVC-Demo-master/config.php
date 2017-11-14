<?php

$bdd = mysqli_connect("localhost","root","A8q8w8z8s8x8--","banque");

if (!$bdd) {
	echo "Erreur de connexion MySQL" . PHP_EOL;
	exit;
}
  //N'oubliez pas de modifier le nom
  $project_name = 'MVC-Demo';