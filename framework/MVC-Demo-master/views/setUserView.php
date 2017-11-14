<?php
//Charge le modèle 'setUser.php' (requète(s) SQL) correspondant a la vue 'setUserView.php'
include ('models/setUser.php');
?>
<h3>Ajouter un Utilisateur</h3>
<form id='usercreate' class="form-inline" method="POST">
    <label>Nom</label><br>
	<input class="form-control" type="text" name='nom' placeholder="Votre nom..."><br><br>
    <label>Solde (Ⓜ)</label><br>
	<input class="form-control" type="number" name='solde' placeholder="Solde en Monyck..."><br><br>
	<input class="btn btn-primary" type="submit" value="Ajouter !">
</form>