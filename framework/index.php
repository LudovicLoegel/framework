<?php
include ("config.php");
include ("functions.php");
include ("view/headers/header.php");


if (isset($_GET["utype"]) && $_GET["utype"] != null) {
    include("controllers/utypeController.php");
}
else if (isset($_GET["users"]) && $_GET["users"] != null) {
    include("controllers/userController.php");
}
else if (isset($_GET["manage"]) && $_GET["manage"] != null) {
    include("controllers/manageController.php");
}
else {
    include("view/blocks/menu.php");
}














include ("view/footers/footer.php");
?>

