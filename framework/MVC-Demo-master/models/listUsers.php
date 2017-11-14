<?php

//Requêtes SQL slectionne 'tout' de la table 'user'
$result = $bdd->query('SELECT *
                             FROM user'
);

//Si les resultats sont supérieur à 0
if ($result->num_rows > 0) {

//Pour chaque résultat
foreach($result as $rs) {
    //On affiche une ligne
    echo '<h2>#'.$rs['id'].' '.$rs['nom'].'</h2><h4>'.$rs['solde'].'Ⓜ</h4>';
    }
} else { //Sinon on afficher un msg d'erreur
echo '<br>Rien à afficher pour le moment...';
}
