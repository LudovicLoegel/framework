<form method="post" action="index.php?utype=update">
<?php
if (isset($_POST['type'])) {
    $type = explode("+", $_POST['type']);
    echo "<input type='hidden' name='id' value='" . $type[0] . "'>
<input type='text' name ='usertype' value='" . $type[1] . "'>
  <button type=\"submit\">Modifier</button>";
}
if (isset($_POST['usertype'])){
    update  ($bdd, 'user_type');
    $_SESSION ['flash']='le type a été modifié';
    messageFlash();
}
?>

</form>
<a href="index.php?utype=menu">Retour</a>
