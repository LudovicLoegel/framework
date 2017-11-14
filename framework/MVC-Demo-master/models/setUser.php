<?php 
 
if (isset($_POST['nom'], $_POST['solde'])) {
$sql = " 
INSERT INTO user (nom, solde)
VALUES ('".$_POST['nom']."',".$_POST['solde'].")";

	if (mysqli_query($bdd, $sql)) {
		echo "<div style='width:500px;' class='alert alert-success center-block'>Utilisateur ".$_POST['nom']." ajouté avec succès !</div>";
	} else {
		echo "Erreur: ".$sql."<br>".mysqli_error($bdd);
	}
}