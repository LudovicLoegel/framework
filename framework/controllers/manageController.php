<?php

switch ($_GET["manage"]){
    case "new":
    include ("view/newManageView.php");
    break;


    case "edit":
    include ("view/editManageView.php");
    break;

    default:
    echo "probleme controleur gestion";
}