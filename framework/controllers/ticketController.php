<?php
switch ($_GET["tickets"]){

    case "add":
    include ("view/addTicketView.php");
    break;


    case "edit":
    include ("view/editTicketView.php");
    break;

    default:
    echo "probleme controleur tickets";
}