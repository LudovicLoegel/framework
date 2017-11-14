<?php
include('models/CRUD.php');
switch ($_GET["utype"]){

    case "menu" :
        include ("javascript.php");
        include ("view/readUtype.php");
        break;

    case "create" :
        include("do/users/createAction.php");
        include ("view/createUtype.php");
        break;

    case "update":
        include ("view/updateUtype.php");
        break;


    case"delete":
        include ("view/deleteUtype.php");
        break;

    default:
        echo "Probleme controleur utilisateurs";}
