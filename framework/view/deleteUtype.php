<?php
if (!isset($_POST['reponse'])) {
    echo "
Voulez vous définitivement supprimer ce type d'utilisateur ?
<form action=\"index.php?utype=delete\" method='post'>";
    if (isset($_POST['type'])) {
        $type = explode("+", $_POST['type']);
        echo "<input type='hidden' name='id' value='" . $type[0] . "'>";
    }
echo "<button name='reponse' value='oui' type='submit'>Oui</button>
<button name='reponse' value='non' type='submit'>Non</button>
</form>";
}
if (isset($_POST['reponse'])){
if ($_POST['reponse']=='oui'){
    delete ($bdd, 'user_type');
    $_SESSION ['flash']='le type a été supprimé';
    messageFlash();
}

if ($_POST['reponse']=='non'){
    header('Location: index.php?utype=menu');
}
}
?>
<a href="index.php?utype=menu">Retour</a>
