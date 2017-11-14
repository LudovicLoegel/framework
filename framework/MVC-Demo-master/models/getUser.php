<?php 

if (isset($_POST['nom'])) {
$result = $bdd->query("SELECT *
                             FROM user
                             WHERE nom 
                             LIKE '%".$_POST['nom']."%'"
);

foreach($result as $rs) {
	echo '<h2>#'.$rs['id'].' '.$rs['nom'].'</h2>'.$rs['solde'].'Ⓜ</br></br>';
    }
}
