<?php
include('models/CRUDusers.php');
switch ($_GET["users"]){

case "create" :
    include("do/users/createUser.php");
    include ("view/createUsers.php");
    break;


case "menu":
    include ("view/readUsers.php");
    include ("javascript.php");
    break;



case "update":
    include ("view/updateUsers.php");
    break;


case"delete":
    include ("view/deleteUsers.php");
    break;

default:
    echo "Probleme controleur utilisateurs";}
