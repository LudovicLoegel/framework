<?php

messageFlash();

foreach(getAllUsers($bdd) as $key=>$value){
    echo $key." ".$value." <br />";

}
echo"<a href='index.php'>Retour</a>";
?>