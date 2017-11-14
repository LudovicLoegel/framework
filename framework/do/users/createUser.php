<?php
if(isset($_POST ["nom"])){
    create($bdd,"users");
    $_SESSION["flash"] = "Utilisateur créé";
    messageFlash();}
?>