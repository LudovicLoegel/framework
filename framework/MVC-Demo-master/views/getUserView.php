<h3>Rechercher un utilisateur</h3>
<form id='usersearch' class="form-inline" method="POST">
	<input class="form-control" type="text" name='nom' placeholder="Entrez un nom...">
	<input class="btn btn-primary" type="submit" value="Rechercher !">
</form>
<?php
//Charge le modèle 'getUser.php' (requète(s) SQL) correspondant a la vue 'getUserView.php'
include ('models/getUser.php');

?>