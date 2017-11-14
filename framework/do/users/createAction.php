<?php
if(isset($_POST ["type"])){
    create($bdd,"user_type");
    $_SESSION["flash"] = "Type crée";
    messageFlash();}
?>

