<?php
$read = read($bdd, 'users');
echo
"<form method='post' id='typeform'>";
echo
"<select name='user'>";

foreach($read as $rs){
    echo
        "<option value='".$rs[0]. "+".$rs[1]."'>".$rs[1];

}
echo
"</select>
<input type='submit' name='action' onclick=\"submitForm('index.php?users=update')\" value='Update'/>
<input type='submit' name='action' onclick=\"submitForm('index.php?users=delete')\" value='Delete'/>
</form>";

?>

<form method="post" action="index.php?users=create">
    <button type="submit">Ajouter</button>
